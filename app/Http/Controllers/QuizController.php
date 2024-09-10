<?php

namespace App\Http\Controllers;
use App\Models\Quizcreation;
use App\Models\Bold;
use App\Models\Discover;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    //Quizcreation , edit,delete,view

      //Quizcreation , edit,delete,view

    public function savequiz(Request $req)
    {

      $req->validate(
         [   
            'quizserial'=>'required|integer|between:1,100',
            'quiz'=>'required',
            'mark'=>'required|integer|between:2,20'
         ],
         ['mark.integer|between:2,20'=>'Each question should be alloted for mark 02 to highest 20']
         );
       $data=new Quizcreation;
      
       $data->quizserial=$req->quizserial;
       $data->quiz=$req->quiz;
       $data->option1=$req->option1;
       $data->option2=$req->option2;
       $data->option3=$req->option3;
       $data->option4=$req->option4;
       $data->answer=$req->answer;
       $data->mark=$req->mark;
      
       $data->save();
       return redirect()->back();
       
    }


    public function getquiz(){
      $data=Quizcreation::all();
      return view('quiz',['infos'=>$data]);
    }


    public function deletequiz($id)
    {
       $data=Quizcreation::find($id);
       $data->delete();
       return redirect()->back();
    }


    public function updatequiz($id)
    {
       $data=Quizcreation::find($id);
       return view('updatequiz',['info'=>$data]);
    }


    public function editquiz(Request $req)
    {
      $req->validate(
         [   
            'quizserial'=>'required|integer|between:1,100',
            'quiz'=>'required',
            'mark'=>'required|integer|between:2,20'
         ],
         ['mark.integer|between:2,20'=>'Each question should be alloted for mark 02 to highest 20']
         );
       $data=Quizcreation::find($req->id);
       $data->id=$req->id;
       $data->quizserial=$req->quizserial;
       $data->quiz=$req->quiz;
       $data->option1=$req->option1;
       $data->option2=$req->option2;
       $data->option3=$req->option3;
       $data->option4=$req->option4;
       $data->answer=$req->answer;
       $data->mark=$req->mark;
       $data->save();
       return redirect()->back();
    }

   
  //quizcreation API

  //quizcreation API
  //quizcreation API

    public function getquizapi(){
      return Quizcreation::all();

    }


    public function savequizapi(Request $req)
    {
       $data=new Quizcreation;
       $data->quizserial=$req->quizserial;
       $data->quiz=$req->quiz;
       $data->option1=$req->option1;
       $data->option2=$req->option2;
       $data->option3=$req->option3;
       $data->option4=$req->option4;
       $data->answer=$req->answer;
       $data->mark=$req->mark;
      
       $data->save();
       
       
    }

    public function deletequizapi($id)
    {
       return Quizcreation::find($id)->delete(); 
    }

    public function editquizapi(Request $req)
    {
       $data=Quizcreation::find($req->id);
       $data->id=$req->id;
       $data->quizserial=$req->quizserial;
       $data->quiz=$req->quiz;
       $data->option1=$req->option1;
       $data->option2=$req->option2;
       $data->option3=$req->option3;
       $data->option4=$req->option4;
       $data->answer=$req->answer;
       $data->mark=$req->mark;
       $data->save();
       
    }

  //testing purpose

public function accessbold(){
   $data=Quizcreation::all();
   return view('bold',['datas'=>$data]);
 }


 public function savebold (Request $req)
{
 
   $aaaa = $req->input('aaa');
   $bbbb = $req->input('bbb');

   foreach ($aaaa as $index => $aaa) {
         
       if (isset($bbbb[$index])) {
           $bold = new Bold();
           $bold->aaa = $aaa;
           $bold->bbb = $bbbb[$index];
           $bold->save();
       
   }
}

   return redirect()->back()->with('success', 'Data saved successfully!');
}
public function kkkk(Request $req)
{
   $data=new Discover;
   $data->kk=$req->kk;
   $data->bb=$req->bb;
   
   $data->save();
   return redirect()->back();
}


// QuiTest Answer submission
// QuiTest Answer submission

public function accesstest(){

   $data=Quizcreation::all();
   if (Auth::check()) {
      $qq = Auth::user()->name;
  } else {
      $qq = 'Guest'; 
  }
   return view('test', ['datas' => $data, 'qq' => $qq]);
 }
    


 public function savetest (Request $req)
{
   
   $quizserial = $req->input('quizserial');
   $name = $req->input('name');
   $quiz = $req->input('quiz');
   $anssubmit = $req->input('anssubmit');
   $correctanswer = $req->input('correctanswer');
   $mark = $req->input('mark');
   $markobtained = $req->input('markobtained');


   foreach ($quizserial as $index => $quizzzserial) {
      $data = new Test();
      $data->quizserial = $quizzzserial;
      
      if (isset($name[$index])) {
         $data->name = $name[$index];   
    } 
      if (isset($quiz[$index])) {
         $data->quiz = $quiz[$index];   
    }  
    
   if (isset($anssubmit[$index])) {
        $data->anssubmit = $anssubmit[$index];   
   }

   if (isset($correctanswer[$index])) {
      $data->correctanswer = $correctanswer[$index];   
 }

 if (isset($mark[$index])) {
   $data->mark = $mark[$index];   
}
     
if (isset($anssubmit[$index])){
   if($anssubmit[$index]==$correctanswer[$index]) 
   {
      $data->markobtained=$mark[$index];
   }
   elseif($anssubmit[$index]!=$correctanswer[$index]) 
   {
      $data->markobtained=0;
   }
}



   $data->save();
   }

   return redirect('/testfeedback');
}



//quiztest performer answersheet
//quiztest performer answersheet

public function gettestanswer()
{
   $data=Test::all();
   return view('testview',['infos'=>$data]);
}


//quiztest RESULT
//quiztest RESULT

public function gettestresult()
{
   $data=Test::selectRaw('name,sum(markobtained)')
   ->groupBy('name')
   ->orderBy('sum(markobtained)','desc')
    ->get();
   return view('testresult',['infos'=>$data]);
}


//quiztest performer answersheet API

public function gettestanswerapi()
{
  return Test::all();
  
}


//live feedback
//live feedback
public function testfeedback(Request $req)
{
  $data=$req->name;
   $result= Test::where('name',$data)->sum('markobtained');
    return "<b>You have acquired </b>".$result."<b> in the MCQ test but for written score you will have to wait for the Examiner to look on your test answersheet</b>";
}


}