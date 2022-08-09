<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.pages.home');
    }
    public function button(){
        return view('admin.pages.button');
    }
    public function card(){
        return view('admin.pages.card');
    }
    public function color(){
        return view('admin.pages.color');
    }
    public function border(){
        return view('admin.pages.border');
    }
    public function animation(){
        return view('admin.pages.animation');
    }
    public function other(){
        return view('admin.pages.other');
    }
    public function login(){
        return view('admin.pages.login');
    }
    public function registration(){
        return view('admin.pages.registration');
    }
    public function forgetPass(){
        return view('admin.pages.forgetPass');
    }
    public function error(){
        return view('admin.pages.error');
    }
    public function blank(){
        return view('admin.pages.blank');
    }
    public function chart(){
        return view('admin.pages.chart');
    }
    public function table(){
        return view('admin.pages.table');
    }
}
