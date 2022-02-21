<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function home(){
        return view('user.home');
    }
    public function about(){
        return view('user.about');
    }
    public function service(){
        return view('user.service');
    }
    public function portfolio(){
        return view('user.portfolio');
    }
    public function team(){
        return view('user.team');
    }
    public function price(){
        return view('user.pricing');
    }
    public function contact(){
        return view('user.contact');
    }
}
