<?php

namespace App\Http\Controllers\SupportTeam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryCategory;

use App\Helpers\Qs;
use App\Http\Requests\UserRequest;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\UserRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function __construct(UserRepo $user, LocationRepo $loc, MyClassRepo $my_class)
    {
        $this->middleware('teamSA', ['only' => ['index', 'store', 'edit', 'update'] ]);
        $this->middleware('super_admin', ['only' => ['reset_pass','destroy'] ]);

    }

    public function index()
    {
        $gallerys = Gallery::all();
        $categories = GalleryCategory::all();
        return view('pages.support_team.gallery.index', ['galleries'=> $gallerys, 'gallery_categorys'=> $categories]);
    }

    public function create()
    {
        $gallerys = Gallery::all();
        return view('pages.support_team.gallery.index', ['galleries'=> $gallerys]);
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
            $gallery_photos_array = [];
            for ($i=0; $i < count($photo); $i++) { 
                $photo_extension = $photo[$i]->getClientOriginalExtension();
                $photo_name = 'gallery_photo'.rand(123456789,999999999).'.'.$photo_extension;
                // $gallery_photos_array[$i] = $photo_name;
                $upload_path = public_path('uploads/');
                $photo[$i]->move($upload_path, $photo_name);
                $photo_name = '/public/uploads/'.$photo_name;
                $gallery_photos_array[$i] = $photo_name;
            }
            // return response()->json($gallery_photos_array);
            $category = GalleryCategory::find($request->category);
            
            $data = [];
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $data['photo'] = json_encode($gallery_photos_array);
            $data['gallery_category_id'] = $request->gallery_category_id;

            // $category->gallery()->create($data);
            Gallery::create($data);
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
        $gallery = Gallery::find($id);
        $categories = GalleryCategory::all();
        return view('pages.support_team.gallery.edit', ['gallery'=> $gallery, 'gallery_categorys'=> $categories]);
    }

    public function update(Request $request, $id)
    {
        $data = [];
        $data['title'] = $request->title;
        $data['description'] = $request->description;

        $gallery = Gallery::find($id);

        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $gallery_photos_array = [];
            for ($i=0; $i < count($photo); $i++) { 
                $photo_extension = $photo[$i]->getClientOriginalExtension();
                $photo_name = 'gallery_photo'.rand(123456789,999999999).'.'.$photo_extension;
                $gallery_photos_array[$i] = $photo_name;
                $upload_path = public_path('uploads/');
                $photo[$i]->move($upload_path, $photo_name);
            }
            // return response()->json($gallery_photos_array);
            
            $data['photo'] = json_encode($gallery_photos_array);

            $gallery->update($data);
            // Gallery::create($data);
            return Qs::jsonUpdateOk();
        }else{
            $data['photo'] = $gallery->photo;
            $gallery->update($data);
            return Qs::jsonUpdateOk();
        }
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        $gallery->delete();

        return Qs::jsonDeleteOk();
    }
}
