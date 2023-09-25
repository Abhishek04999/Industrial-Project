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
        return view ('acourse');
    }
    public function addquiz(){
        return view ('addquiz');
    }

    public function user(){
        return view('user');
    }

    public function removequiz(){
        return view('removequiz');
    }

    public function createques(){
        return view('createques');
    }


}
