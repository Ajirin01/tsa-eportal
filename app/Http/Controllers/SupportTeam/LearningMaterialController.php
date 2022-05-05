<?php

namespace App\Http\Controllers\SupportTeam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LearningMaterial;
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

class LearningMaterialController extends Controller
{
    public function __construct(UserRepo $user, LocationRepo $loc, MyClassRepo $my_class)
    {
        $this->middleware('teamSAT', ['only' => ['index', 'store', 'edit', 'update'] ]);
        $this->middleware('super_admin', ['only' => ['reset_pass','destroy'] ]);

    }

    public function index()
    {
        $materials = LearningMaterial::all();
        $categories = MyClass::all();
        return view('pages.support_team.materials.index', ['materials'=> $materials, 'categories'=> $categories]);
    }

    public function create()
    {
        $materials = LearningMaterial::all();
        return view('pages.support_team.materials.index', ['materials'=> $materials]);
    }

    public function store(Request $request)
    {
        // echo $request->class;
        // exit;
        // return response()->json($requetitlest->hasFile('pdf'));
        // exit;
        // return response()->json($request->file('pdf'));
        // $request->file();
        // exit;
        if($request->hasFile('pdf')) {
            $material = $request->file('pdf');
            
            $material_extension = $material->getClientOriginalExtension();
            // $material_name = 'gallery_photo'.rand(123456789,999999999).'.'.$material_extension;
            $material_name = $material->getClientOriginalName();
            // return response()->json($material_name);
            // $gallery_photos_array[$i] = $material_name;
            $upload_path = public_path('uploads/');
            $material->move($upload_path, $material_name);
            $material_name = '/public/uploads/'.$material_name;
            // return response()->json($gallery_photos_array);
            $category = MyClass::find($request->class);
            
            $data = [];
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $data['material'] = $material_name;

            $category->learning_materials()->create($data);
            // LearningMaterial::create($data);
            return Qs::jsonStoreOk("materials.index");
        }else{
            return back()->with('pop_error', 'Please select at least one photo');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $material = LearningMaterial::find($id);
        $categories = MyClass::all();
        return view('pages.support_team.materials.edit', ['material'=> $material, 'categories'=> $categories]);
    }

    public function update(Request $request, $id)
    {
        $data = [];
        $data['title'] = $request->title;
        $data['description'] = $request->description;

        $material_to_update = LearningMaterial::find($id);

        if($request->hasFile('pdf')) {
            $material = $request->file('pdf');
            $material_extension = $material->getClientOriginalExtension();
            // $material_name = 'gallery_photo'.rand(123456789,999999999).'.'.$material_extension;
            $material_name = $material->getClientOriginalName();
            $material_name = '/public/uploads/'.$material_name;
            $upload_path = public_path('uploads/');
            $material->move($upload_path, $material_name);
        
            // return response()->json($gallery_photos_array);
            
            $data['material'] = '/public/uploads/'.$material->getClientOriginalName();

            $material_to_update->update($data);
            // LearningMaterial::create($data);
            return Qs::updateOk("materials.index");
        }else{
            $data['material'] = $material->material;
            $material->update($data);
            return Qs::updateOk("materials.index");
        }
    }

    public function destroy($id)
    {
        $material = LearningMaterial::find($id);

        $material->delete("materials.index");

        return Qs::deleteOk("materials.index");
    }
}
