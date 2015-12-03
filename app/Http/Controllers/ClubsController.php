<?php

namespace App\Http\Controllers;

use App\Aikido_Club;
use App\Aikido_Coache;
use Illuminate\Http\Request;

// use App\Http\Requests;
// use App\Http\Controllers\Controller;

class ClubsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('clubs/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $coaches = Aikido_Coache::orderBy('coach_level', 'desc')->get();
        return view('clubs/create', ['coaches' => $coaches]);
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
        $club = new Aikido_Club(
            array(
                'club_name' => $request->get('club_name'),
                'club_url' => $request->get('club_url') && strpos($request->get('club_url'), 'http://') === false ? 'http://' . $request->get('club_url') : $request->get('club_url'),
                'club_fb_url' => $request->get('club_fb_url') && strpos($request->get('club_fb_url'), 'http://') === false ? 'http://' . $request->get('club_fb_url') : $request->get('club_fb_url'),
                'club_email' => $request->get('club_email'),
                'club_phone' => $request->get('club_phone'),
                'club_address' => $request->get('club_address'),
                'club_lat' => $request->get('club_lat'),
                'club_lon' => $request->get('club_lon'),
                'club_note' => $request->get('club_note'),
                'club_coach_id' => $request->get('club_coach_id'),
            )
        );
        $club->save();

        if ($request->get('club_url') === '') {
            $club->club_url = 'clubs/' . $club->id;
        }

        if ($request->hasFile('club_logo_url')) {

            $file = $request->file('club_logo_url');

            $img_name = $club->id . '.' . $file->getClientOriginalExtension();
            $img_url = '/img/logo/' . $img_name;
            $new_path = base_path() . '/public/img/logo/';
            $file->move($new_path, $img_name);

            $club->club_logo_url = $img_url;
        } else {
            $club->club_logo_url = '/img/aikido.jpg';
        }
        $club->save();

        return redirect('/klubovi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $club = Aikido_Club::find($id);
        return view('clubs/club', ['club' => $club]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
