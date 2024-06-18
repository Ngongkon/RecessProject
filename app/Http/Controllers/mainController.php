<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class mainController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about_us(){
        return view('frontend.about');
    }
   public function redirect(){
        if(Auth::id()){
            if(Auth::user()-> usertype =='0'){
                return view('frontend.master');
            }else{
                 return ('this is an admin');
            }
        }else{
            return redirect()->back();
        }
    }
    public function contact_us(){
        return view('frontend.contact');
    }
}
