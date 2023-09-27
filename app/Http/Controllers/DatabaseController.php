<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Courses;


function getID($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $id = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($characters) - 1);
        $id .= $characters[$randomIndex];
    }
    return $id;
}
class DatabaseController extends Controller
{


    //==============User Database ===============
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

    public function delete($id)
    {
           $user4 = Users::find($id);
           if(!is_null($user4)){
            $user4->delete();
           }
       return redirect('user');
    }

    //============================================

    //===============Course database==============


    public function addcourse(Request $req)
    {
        $addcourse = new Courses;
          $addcourse->Cname = $req['Cname'];
          $addcourse->Curl = $req['Curl'];

        $filename = time() . "-notes." . $req->file('Cfilename')->getClientOriginalExtension();
        $req->file('Cfilename')->storeAs('public/uploads', $filename);
        $addcourse->Cfilename =$filename;
          $addcourse->save();
          return redirect()->back();

    }

    public function courseview(){


        $courseview = Courses::all();
        $data = compact('courseview');
        return view('acourse')->with($data);

    }

    public function coursedelete($id)
    {
           $coursedelete = Courses::find($id);
           if(!is_null($coursedelete)){
            unlink(public_path('/storage/uploads/'.$coursedelete->Cfilename));
            $coursedelete->delete();
           }
       return redirect('course');
    }


    public function courseedit(Request $req, $id){

        $courseedit = Courses::find($id);

        $courseedit->Cname = $req['Cname'];
          $courseedit->Curl = $req['Curl'];

          unlink(public_path('/storage/uploads/'.$courseedit->Cfilename));

        $filename = time() . "-notes." . $req->file('Cfilename')->getClientOriginalExtension();
        $req->file('Cfilename')->storeAs('public/uploads', $filename);
        $courseedit->Cfilename =$filename;
          $courseedit->save();
          return redirect()->back();


    }

}
