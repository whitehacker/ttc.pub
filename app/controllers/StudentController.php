<?php

class StudentController extends BaseController {

  public function getStudent(){
    return View::make('user.students');

  }

  public function postStudent(){
    $validate = Validator::make(Input::all(), array(
      'pro' => 'required|min:3',
      'ttc_name' => 'required',
      'teacher_name' => 'required',
      'teacher_last_name' => 'required',
      'subject' => 'required',
      'department' => 'required',
      'semester' => 'required',
      'date' => 'required',
      'gender' => 'required',
      'class' => 'required',
      'st_semester' => 'required',
      'st_subject' => 'required'

    ));
    if($validate ->fails()){
      return Redirect::route('getStudent')->withErrors($validate)->withInput();
    }
    else{
      $student = new Students();
      //$user= new User();
      $student->MONITORING_PROVINCE = Input::get('pro');
      $student->TTC_NAME = Input::get('ttc_name');
      $student->TEACHER_NAME = Input::get('teacher_name');
      $student->TEACHER_SURNAME = Input::get('teacher_last_name');
      $student->SUBJECT = Input::get('subject');
      $student->DEPARTMENT = Input::get('department');
      $student->SEMESTER	 = Input::get('semester');
      $student->DATE	 = Input::get('date');
      $student->GENDER = Input::get('gender');
      $student->CLASS = Input::get('class');
      $student->SEMESTER_END = Input::get('st_semester');
      $student->SUBJECT_END = Input::get('st_subject');
      $student->User_id = Auth::user()->getUserId();

      if($student->save()){
        return Redirect::route('getStudent')->with('success','فورم شما موفقانه ثبت ګردید!!');
      }
      else{
        return Redirect::route('getStudent')->with('fail','مشکلی رخ داد لطفا دوباره کوشش نمایید!');
      }
    }
  }


}

?>
