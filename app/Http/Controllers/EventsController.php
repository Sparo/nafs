<?php

namespace App\Http\Controllers;

use App\Aikido_Event;
use Illuminate\Http\Request;
use Storage;

// use App\Http\Requests;
// use App\Http\Controllers\Controller;

class EventsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Aikido_Event $events) {
        return view('events/index', ['events' => $events->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('events/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        unset($request['_token']);
        // dd($request->all());
        $event = new Aikido_Event(
            array(
                'event_title' => $request->get('event_title'),
                'event_url' => $request->get('event_url') && strpos($request->get('event_url'), 'http://') === false ? 'http://' . $request->get('event_url') : $request->get('event_url'),
                'event_address' => $request->get('event_address'),
                'event_start_time' => $request->get('event_start_time'),
                'event_end_time' => $request->get('event_end_time'),
                'event_lat' => $request->get('event_lat'),
                'event_lon' => $request->get('event_lon'),
                'event_description' => $request->get('event_description'),
                'event_note' => $request->get('event_note'),
            )
        )
        $event->save();

        if ($request->get('event_url') === '') {
            $event->event_url = 'events/' . $event->id;
        }

        if ($request->hasFile('event_img_url')) {

            $file = $request->file('event_img_url');

            $img_name = $event->id . '.' . $file->getClientOriginalExtension();
            $img_url = '/img/event/' . $img_name;
            $new_path = base_path() . '/public/img/event/';
            $file->move($new_path, $img_name);

            $event->event_img_url = $img_url;
        } else {
            $event->event_img_url = '/img/aikido.jpg';
        }
        $event->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $event = Aikido_Event::find($id);
        return view('events/event', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        var_dump($id);
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        echo "destroy <br />";
        dd($id);
    }
}
