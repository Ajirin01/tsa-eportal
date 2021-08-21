<?php

namespace App\Http\Controllers\SupportTeam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
// use App\Models\EventCategory;

use App\Helpers\Qs;
use App\Http\Requests\UserRequest;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\UserRepo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function __construct(UserRepo $user, LocationRepo $loc, MyClassRepo $my_class)
    {
        $this->middleware('teamSA', ['only' => ['index', 'store', 'edit', 'update'] ]);
        $this->middleware('super_admin', ['only' => ['reset_pass','destroy'] ]);

    }

    public function index()
    {
        $events = Event::all();
        // $categories = EventCategory::all();
        return view('pages.support_team.events.index', ['events'=> $events]);
    }

    public function create()
    {
        $events = Event::all();
        return view('pages.support_team.events.index', ['events'=> $events]);
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
            $event_photos_array = [];
            for ($i=0; $i < count($photo); $i++) { 
                $photo_extension = $photo[$i]->getClientOriginalExtension();
                $photo_name = 'event_photo'.rand(123456789,999999999).'.'.$photo_extension;
                $event_photos_array[$i] = $photo_name;
                $upload_path = public_path('uploads/');
                $photo[$i]->move($upload_path, $photo_name);
            }
            // return response()->json($event_photos_array);
            // $category = EventCategory::find($request->category);
            
            $data = [];
            $data['title'] = $request->title;
            $data['description'] = $request->description;
            $data['state'] = $request->state;
            $data['date'] = $request->date;
            $data['location'] = $request->location;
            $data['photo'] = json_encode($event_photos_array);

            // $category->event()->create($data);
            Event::create($data);
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
        $event = Event::find($id);
        
        return view('pages.support_team.events.edit', ['event'=> $event]);
    }

    public function update(Request $request, $id)
    {
        $data = [];
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['state'] = $request->state;
        $data['date'] = $request->date;
        $data['location'] = $request->location;

        $event = Event::find($id);

        if($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $event_photos_array = [];
            for ($i=0; $i < count($photo); $i++) { 
                $photo_extension = $photo[$i]->getClientOriginalExtension();
                $photo_name = 'event_photo'.rand(123456789,999999999).'.'.$photo_extension;
                $event_photos_array[$i] = $photo_name;
                $upload_path = public_path('uploads/');
                $photo[$i]->move($upload_path, $photo_name);
            }
            // return response()->json($event_photos_array);
            
            $data['photo'] = json_encode($event_photos_array);

            $event->update($data);
            // Event::create($data);
            return Qs::jsonUpdateOk();
        }else{
            $data['photo'] = $event->photo;
            $event->update($data);
            return Qs::jsonUpdateOk();
        }
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        $event->delete();

        return Qs::jsonDeleteOk();
    }
}
