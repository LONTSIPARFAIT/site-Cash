<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function index(){

        return view('room.accueil');
    }
    public function about(){

        return view('room.about');
    }
    public function contact(){

        return view('room.contact');
    }
    public function service(){

        return view('room.service');
    }
}
