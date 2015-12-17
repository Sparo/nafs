<?php

namespace App\Http\Controllers;

use App\Aikido_About;
use App\Aikido_Club;
use App\Aikido_Coache;
use App\Aikido_Event;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Aikido_Event $events) {
        $withOrder = $events->where('event_start_time', '>', date('Y-m-d H:i:m', time()))->orderBy('event_start_time')->get();
        return view('home/index', ['events' => $withOrder]);
    }

    public function clubs(Aikido_Club $clubs) {
        $withOrder = $clubs->orderBy('club_name')->get();
        return view('home/clubs', ['clubs' => $withOrder]);
    }

    public function coaches(Aikido_Coache $coaches) {
        $withOrder = $coaches->orderBy('coach_level', 'desc')->orderBy('coach_last_name', 'desc')->get();
        $clubs = Aikido_Club::all();
        return view('home/coaches', ['coaches' => $withOrder, 'clubs' => $clubs]);
    }

    public function about(Aikido_About $about) {
        return view('home/about', ['about' => $about->all()]);
    }

    public function contact() {
        return view('home/contact');
    }

    public function contactClubs(Aikido_Club $clubs) {
        return $clubs->all();
    }

    public function dashboard() {
        return view('home/dashboard');
    }

}
