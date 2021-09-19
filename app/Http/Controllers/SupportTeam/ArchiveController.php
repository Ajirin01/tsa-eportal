<?php

namespace App\Http\Controllers\SupportTeam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Archive;
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

class ArchiveController extends Controller
{
    public function __construct(UserRepo $user, LocationRepo $loc, MyClassRepo $my_class)
    {
        $this->middleware('teamSA', ['only' => ['index', 'store', 'edit', 'update'] ]);
        $this->middleware('super_admin', ['only' => ['reset_pass','destroy'] ]);

    }

    public function index()
    {
        $archive = Archive::all();
        return view('pages.support_team.archives.index', ['archives'=> $archive]);
    }

    public function create()
    {
        $archive = Archive::all();
        return view('pages.support_team.archives.index', ['archives'=> $archive]);
    }

    public function store(Request $request)
    {
        $rule = [
            'title'=> 'required | min: 5| max: 500'
        ];

        $validator = Validator::make($request->all(), $rule);

        if($validator->fails()){
            return redirect()->back()->with('pop_error', $validator->errors());
        }else{
            $data= [];
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            Archive::create($data);
            return Qs::jsonStoreOk();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $archive = Archive::find($id);
        return view('pages.support_team.archives.edit', ['archive'=> $archive]);
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
        $event_category_to_update = Archive::find($id);
        $data = [];
        $data['title'] = $request->title;
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
