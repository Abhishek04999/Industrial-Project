<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Courses;
use App\Models\Quiz;
use App\Models\QuizQuestion;


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

    //==============================================================================

    //======================Quiz Database ==========================================

     public function addquiz(Request $req)
     {
            $addquiz = new Quiz;
            $addquiz->qtitle = $req['qtitle'];
            $addquiz->questotlnumber = $req['questotlnumber'];
            $addquiz->rightmarksans = $req['rightmarksans'];
            $addquiz->wrongmarkans = $req['wrongmarkans'];
            $addquiz->timelimit = $req['timelimit'];
            $addquiz->save();


        $x=$req['questotlnumber'];


            $data = compact('x');
            return view('createques')->with($data);

     }

     public function viewquiz()
     {
        $viewquiz = Quiz::all();
        $data = compact('viewquiz');
        return view('removequiz')->with($data);



     }



     public function saveQuiz(Request $request)
{
    // Loop through the form data and save each quiz question
    for ($i = 1; $i <= $request->x; $i++) {
        $quizQuestion = new QuizQuestion();
        $quizQuestion->question = $request->input("qns$i");
        $quizQuestion->option_a = $request->input("${i}a");
        $quizQuestion->option_b = $request->input("${i}b");
        $quizQuestion->option_c = $request->input("${i}c");
        $quizQuestion->option_d = $request->input("${i}d");
        $quizQuestion->correct_answer = $request->input("ans$i");
        $quizQuestion->save();
    }

    // Redirect back to the form or any other page
    return view('addquiz');

}
    public function delquiz($id)
    {
           $delquiz = Quiz::find($id);
           if(!is_null($delquiz)){
            $delquiz->delete();
           }
       return redirect('removequiz');
    }


    public function showquestion()
    {
        $showquestions = QuizQuestion::all();
        $data = compact('showquestions');
        return view('questionview')->with($data);
    }


    public function showques()
    {
        $showques = Quiz::all();
        $data = compact('showques');
        return view('showques')->with($data);

    }

    //===============================================================================


}
