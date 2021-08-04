<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function edit(){
        return view('edit-guest');
    }
    public function guestView(){
        return view('guest-view');
    }
    public function adminView(){
        return view('admin-view');
    }
    public function home(){
        return view('home');
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function success(){
        return view('success');
    }

}
