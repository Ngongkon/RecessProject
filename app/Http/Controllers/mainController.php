<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about_us(){
        return view('frontend.about');
    }
    public function login_us(){
        return view('frontend.login');
    }
    public function contact_us(){
        return view('frontend.contact');
    }
}
