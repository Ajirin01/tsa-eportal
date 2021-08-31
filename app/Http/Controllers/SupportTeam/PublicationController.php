<?php

namespace App\Http\Controllers\SupportTeam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publication;

use App\Helpers\Qs;
use App\Http\Requests\UserRequest;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\UserRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PublicationController extends Controller
{
    public function __construct(UserRepo $user, LocationRepo $loc, MyClassRepo $my_class)
    {
        $this->middleware('teamSA', ['only' => ['index', 'store', 'edit', 'update'] ]);
        $this->middleware('super_admin', ['only' => ['reset_pass','destroy'] ]);

    }

    public function index()
    {
        $publications = Publication::all();
        return view('pages.support_team.publication.index', ['publications'=> $publications]);
    }

    public function create()
    {
        $publications = Publication::all();
        return view('pages.support_team.publication.index', ['publications'=> $publications]);
    }

    public function store(Request $request)
    {
        // return response()->json($request->all());
        // exit;
        // return response()->json($request->file('photo'));
        // $request->file();
        // exit;
        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo_extension = $photo->getClientOriginalExtension();
            $photo_name = 'publication_photo'.rand(123456789,999999999).'.'.$photo_extension;
            // $gallery_photos_array[$i] = $photo_name;
            $upload_path = public_path('uploads/');
            $photo->move($upload_path, $photo_name);
            $photo_name = '/public/uploads/'.$photo_name;
            
            
            $data = [];
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $data['photo'] = json_encode($photo_name);

            $category->publication()->create($data);
            // Publication::create($data);
            return Qs::jsonStoreOk();
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
        $publication = Publication::find($id);
        
        return view('pages.support_team.publication.edit', ['publication'=> $publication]);
    }

    public function update(Request $request, $id)
    {
        $data = [];
        $data['title'] = $request->title;
        $data['description'] = $request->description;

        $publication = Publication::find($id);

        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            
            $photo_extension = $photo->getClientOriginalExtension();
            $photo_name = 'publication_photo'.rand(123456789,999999999).'.'.$photo_extension;
            $upload_path = public_path('uploads/');
            $photo->move($upload_path, $photo_name);
                
            // return response()->json($gallery_photos_array);
            
            $data['photo'] = json_encode($photo_name);

            $publication->update($data);
            // Publication::create($data);
            return Qs::jsonUpdateOk();
        }else{
            $data['photo'] = $publication->photo;
            $publication->update($data);
            return Qs::jsonUpdateOk();
        }
    }

    public function destroy($id)
    {
        $publication = Publication::find($id);

        $publication->delete();

        return Qs::jsonDeleteOk();
    }
}
