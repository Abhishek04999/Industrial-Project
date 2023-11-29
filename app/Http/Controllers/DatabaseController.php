<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Courses;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\adminloginout;


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
          $users1->password = $request['password'];
          $users1->save();
          return redirect()->back();
    }

    public function view(){


        $users2 = Users::all();
        $data = compact('users2');
        return view('admin.user')->with($data);

    }

    public function delete($id)
    {
           $user4 = Users::find($id);
           if(!is_null($user4)){
            $user4->delete();
           }
       return redirect('user');
    }

    ///=============================Admin Login==========

    public function adminlogin(){

        return view('admin.adminlogin');

    }

    public function adminl(Request $request){

        $ad = adminloginout::where('email',$request->email)->first()->toArray();

        if($ad['email']==$request->email && $ad['password']==$request->password){
        session()->put('admin_id',$request->email);
        return redirect('/course');
    }
    else{
        return redirect()->back();
    }

    }

    public function adminlogout(){



        session()->remove('admin_id');
        return redirect('/adminlogin');
    }


    ///====================User Login==============================
    public function userlogin(){

        return view('user.login');

    }

    public function userl(Request $request){

        $ad = Users::where('email',$request->email)->first()->toArray();

        if($ad['email']==$request->email && $ad['password']==$request->password){
        session()->put('user_id',$request->email);
        return redirect('/uhome');
    }
    else{
        return redirect()->back();
    }

    }

    public function userlogout(){



        session()->remove('user_id');
        return redirect('/userlogin');
    }

    //============================================

    //===============Course database==============


    public function addcourse(Request $req)
{
    $addcourse = new Courses;
    $addcourse->Cname = $req['Cname'];
    // $addcourse->Curl = $req['Curl'];

    // Extract YouTube video ID from the URL
    $videoId = $this->getVideoId($req['Curl']);

    if ($videoId !== "error") {
        $addcourse->Curl = $videoId; // Assuming you have a 'CvideoId' column in your Courses table

        // Upload the file
        $filename = time() . "-notes." . $req->file('Cfilename')->getClientOriginalExtension();
        $req->file('Cfilename')->storeAs('public/uploads', $filename);
        $addcourse->Cfilename = $filename;

        $addcourse->save();

        return redirect()->back()->with('success', 'Course added successfully.');
    } else {
        return redirect()->back()->with('error', 'Invalid YouTube URL.');
    }
}

// Function to extract YouTube video ID
private function getVideoId($url)
{
    $videoUrl = parse_url($url);

    if ($videoUrl['host'] === "youtu.be") {
        return ltrim($videoUrl['path'], '/');
    } elseif (
        ($videoUrl['host'] === "www.youtube.com" || $videoUrl['host'] === "youtube.com") &&
        isset($videoUrl['query'])
    ) {
        parse_str($videoUrl['query'], $queryParams);
        return isset($queryParams['v']) ? $queryParams['v'] : "error";
    } else {
        return "error";
    }
}

    public function courseview(){


        $courseview = Courses::all();
        $data = compact('courseview');
        return view('admin.acourse')->with($data);

    }

    public function ucoursesview(){


        $ucoursesview = Courses::all();
        $data = compact('ucoursesview');
        return view('user.ucourse')->with($data);

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


    public function courseedit(Request $req, $id)
    {
        $courseedit = Courses::find($id);

        $courseedit->Cname = $req['Cname'];
        // $courseedit->Curl = $req['Curl'];

        // Extract YouTube video ID from the URL
        $videoId = $this->getVideo($req['Curl']);

        if ($videoId !== "error") {
            $courseedit->Curl = $videoId; // Assuming you have a 'CvideoId' column in your Courses table

            // Delete the old file
            unlink(storage_path("app/public/uploads/{$courseedit->Cfilename}"));

            // Upload the new file
            $filename = time() . "-notes." . $req->file('Cfilename')->getClientOriginalExtension();
            $req->file('Cfilename')->storeAs('public/uploads', $filename);
            $courseedit->Cfilename = $filename;

            $courseedit->save();

            return redirect()->back()->with('success', 'Course updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid YouTube URL.');
        }
    }

    // Function to extract YouTube video ID
    private function getVideo($url)
    {
        $videoUrl = parse_url($url);

        if ($videoUrl['host'] === "youtu.be") {
            return ltrim($videoUrl['path'], '/');
        } elseif (
            ($videoUrl['host'] === "www.youtube.com" || $videoUrl['host'] === "youtube.com") &&
            isset($videoUrl['query'])
        ) {
            parse_str($videoUrl['query'], $queryParams);
            return isset($queryParams['v']) ? $queryParams['v'] : "error";
        } else {
            return "error";
        }
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
            return view('admin.createques')->with('quizid', $addquiz->quizid)->with($data);

     }

     public function viewquiz()
     {
        $viewquiz = Quiz::all();
        $data = compact('viewquiz');
        return view('admin.removequiz')->with($data);



     }



     public function saveQuiz(Request $request)
{
    // Loop through the form data and save each quiz question
    $quizId = $request->input('id');
    for ($i = 1; $i <= $request->x; $i++) {
        $quizQuestion = new QuizQuestion();
        $quizQuestion->question = $request->input("qns$i");
        $quizQuestion->option_a = $request->input("${i}a");
        $quizQuestion->option_b = $request->input("${i}b");
        $quizQuestion->option_c = $request->input("${i}c");
        $quizQuestion->option_d = $request->input("${i}d");
        $quizQuestion->correct_answer = $request->input("ans$i");
        $quizQuestion->quizid = $quizId;
        $quizQuestion->save();
    }


    // Redirect back to the form or any other page
    return view('admin.addquiz');

}
    public function delquiz($id)
    {
           $delquiz = Quiz::find($id);
           if(!is_null($delquiz)){
            $delquiz->delete();
           }
       return redirect('removequiz');
    }


    public function showquestion($id)
    {
        $showquestions = QuizQuestion::where('quizid',$id)->get();
        $data = compact('showquestions');
        return view('admin.questionview')->with($data);
    }


    public function showques()
    {
        $showques = Quiz::all();
        $data = compact('showques');
        return view('admin.showques')->with($data);

    }

    public function quizstart()
    {
        $showques = Quiz::all();
        $data = compact('showques');
        return view('user.uquizes')->with($data);

    }
    public function uhome(){
        return view('user.uhome');

    }

    //===============================================================================

   public function ucours(){
    return view('user.ucours');
   }

   public function ucourssview(Request $request){

    $ucourssview = Courses::where('Cname',base64_decode($request->input('q')))->get();
    $data = compact('ucourssview');
    return view('user.ucours')->with($data);

}



}
