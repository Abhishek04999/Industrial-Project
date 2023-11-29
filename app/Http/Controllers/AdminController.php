<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function navbar()
    // {
    //     return view('anavbar');
    // }
    public function course() {
        return view ('admin.acourse');
    }
    public function addquiz(){
        return view ('admin.addquiz');
    }

    public function user(){
        return view('admin.user');
    }

    public function removequiz(){
        return view('admin.removequiz');
    }

    public function createques(){
        return view('admin.createques');
    }

    public function showques(){
        return view('admin.showques');
    }

    public function result(){
        return view('admin.result');
    }
    public function urank(){
        return view('user.urank');
    }



}
