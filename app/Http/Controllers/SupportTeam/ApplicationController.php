<?php

namespace App\Http\Controllers\SupportTeam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\MyClass;

use App\Helpers\Qs;
use App\Http\Requests\UserRequest;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\UserRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    public function __construct(UserRepo $user, LocationRepo $loc, MyClassRepo $my_class)
    {
        $this->middleware('teamSAT', ['only' => ['index', 'store', 'edit', 'update'] ]);
        $this->middleware('super_admin', ['only' => ['reset_pass','destroy'] ]);

    }

    public function index()
    {
        $applications = Application::all();
        $categories = MyClass::all();
        return view('pages.support_team.applications.index', ['applications'=> $applications, 'categories'=> $categories]);
    }

    public function create()
    {
        $applications = Application::all();
        return view('pages.support_team.applications.index', ['applications'=> $applications]);
    }

    public function store(Request $request)
    {
        // return response()->json($requetitlest->hasFile('pdf'));
        // exit;
        // return response()->json($request->file('pdf'));
        // $request->file();
        // exit;
        if($request->hasFile('pdf')) {
            $application = $request->file('pdf');
            
            $material_extension = $application->getClientOriginalExtension();
            // $material_name = 'gallery_photo'.rand(123456789,999999999).'.'.$material_extension;
            $material_name = $application->getClientOriginalName();
            // return response()->json($material_name);
            // $gallery_photos_array[$i] = $material_name;
            $upload_path = public_path('uploads/');
            $application->move($upload_path, $material_name);
            $material_name = '/public/uploads/'.$material_name;
            // return response()->json($gallery_photos_array);
            $category = MyClass::find($request->class);
            
            $data = [];
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $data['application'] = $material_name;

            $category->learning_materials()->create($data);
            // Application::create($data);
            return Qs::jsonStoreOk();
        }else{
            return back()->with('pop_error', 'Please select at least one photo');
        }
    }

    public function show($id)
    {
        $application = Application::find($id);
        return view('pages.support_team.applications.show', ['application'=> $application]);
    }

    public function edit($id)
    {
        $application = Application::find($id);
        $categories = MyClass::all();
        return view('pages.support_team.applications.edit', ['application'=> $application, 'categories'=> $categories]);
    }

    public function update(Request $request, $id)
    {
        $data = [];
        $data['applicant_name'] = $request->applicant_name;
        $data['post_applying_for'] = $request->post_applying_for;
        $data['applicant_present_address'] = $request->applicant_present_address;
        $data['applicant_age'] = $request->applicant_age;
        $data['applicant_gender'] = $request->applicant_gender;
        $data['applicant_phone'] = $request->applicant_phone;
        if($request->has('status')){
            $data['status'] = $request->status;
        }else{
            $data['status'] = 'reviewed';
        }
        $data['form_data'] = json_encode($request->all());

        $application = Application::find($id);

        $update_application = $application->update($data);
        if($update_application){
            return redirect()->route('applications.index')->with('msg', 'Application Successfully Updated!');
        }else{
            return redirect()->back()->with('error', 'Application Could not be Successfully Updated!');
        }
        // $data = [];
        // $data['title'] = $request->title;
        // $data['description'] = $request->description;

        // $application = Application::find($id);

        // if($request->hasFile('pdf')) {
        //     $application = $request->file('pdf');
        //     $material_extension = $application->getClientOriginalExtension();
        //     // $material_name = 'gallery_photo'.rand(123456789,999999999).'.'.$material_extension;
        //     $material_name = $application->getClientOriginalName();
        //     $upload_path = public_path('uploads/');
        //     $application->move($upload_path, $material_name);
        
        //     // return response()->json($gallery_photos_array);
            
        //     $data['application'] = $material_name;

        //     $application->update($data);
        //     // Application::create($data);
        //     return Qs::jsonUpdateOk();
        // }else{
        //     $data['application'] = $application->application;
        //     $application->update($data);
        //     return Qs::jsonUpdateOk();
        // }
    }

    public function destroy($id)
    {
        $application = Application::find($id);

        $application->delete();

        return Qs::jsonDeleteOk();
    }
}
