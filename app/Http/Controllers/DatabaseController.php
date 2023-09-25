<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class DatabaseController extends Controller
{
    public function store(Request $request ){

          $users1 = new Users;
          $users1->username = $request['name'];
          $users1->email = $request['email'];
          $users1->gender = $request['gender'];
          $users1->password = md5($request['password']);
          $users1->save();
    }

    public function view(){


        $users2 = Users::all();
        $data = compact('users2');
        return view('user')->with($data);

    }

}
