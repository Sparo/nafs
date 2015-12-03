<?php

namespace App\Http\Controllers;
use App\Aikido_Club;
use App\Aikido_Coache;
use Illuminate\Http\Request;

// use App\Http\Requests;
// use App\Http\Controllers\Controller;

class CoachesController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('coaches/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Aikido_Club $clubs) {

        return view('coaches/create', ['clubs' => $clubs->all()]);
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
        $coach = new Aikido_Coache(
            array(
                'coach_first_name' => $request->get('coach_first_name'),
                'coach_last_name' => $request->get('coach_last_name'),
                'coach_title' => $request->get('coach_title'),
                'coach_level' => $request->get('coach_level'),
                'coach_cv' => $request->get('coach_cv'),
                'coach_note' => $request->get('coach_note'),
                'coach_club_id' => $request->get('coach_club_id'),
            )
        );
        $coach->save();

        if ($request->hasFile('coach_img_url')) {

            $file = $request->file('coach_img_url');

            $img_name = $coach->id . '.' . $file->getClientOriginalExtension();
            $img_url = '/img/coach/' . $img_name;
            $new_path = base_path() . '/public/img/coach/';
            $file->move($new_path, $img_name);

            $coach->coach_img_url = $img_url;
        }
        $coach->save();

        return redirect('/treneri');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $coach = Aikido_Coache::find($id);
        $club = Aikido_Club::all();
        return view('coaches/coach', ['club' => $club, 'coach' => $coach]);
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
