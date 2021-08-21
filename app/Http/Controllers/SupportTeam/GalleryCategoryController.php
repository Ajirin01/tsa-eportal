<?php

namespace App\Http\Controllers\SupportTeam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use Validator;

use App\Helpers\Qs;
use App\Http\Requests\UserRequest;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\UserRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryCategoryController extends Controller
{
    public function __construct(UserRepo $user, LocationRepo $loc, MyClassRepo $my_class)
    {
        $this->middleware('teamSA', ['only' => ['index', 'store', 'edit', 'update'] ]);
        $this->middleware('super_admin', ['only' => ['reset_pass','destroy'] ]);

    }

    public function index()
    {
        $event_category = GalleryCategory::all();
        return view('pages.support_team.events_category.index', ['categories'=> $event_category]);
    }

    public function create()
    {
        $event_category = GalleryCategory::all();
        return view('pages.support_team.events_category.index', ['categories'=> $event_category]);
    }

    public function store(Request $request)
    {
        $rule = [
            'title'=> 'required | min: 5| max: 199'
        ];

        $validator = Validator::make($request->all(), $rule);

        if($validator->fails()){
            return redirect()->back()->with('pop_error', $validator->errors());
        }else{
            $data= [];
            $data['category'] = $request->title;
            $data['description'] = $request->description;
            GalleryCategory::create($data);
            return Qs::jsonStoreOk();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $event_category = GalleryCategory::find($id);
        return view('pages.support_team.events_category.edit', ['event_category'=> $event_category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return response()->json($request->all());
        $event_category_to_update = GalleryCategory::find($id);
        $data = [];
        $data['category'] = $request->title;
        $data['description'] = $request->description;

        $event_category_to_update->update($data);
        return Qs::jsonUpdateOk();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
