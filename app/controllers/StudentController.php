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
      'teacher_last_name' => 'required'
    ));
    if($validate ->fails()){
      return Redirect::route('getStudent')->withErrors($validate)->withInput();
    }
    else{
      $student = new Students();
      $student->MONITORING_PROVINCE = Input::get('pro');
      $student->TTC_NAME = Input::get('ttc_name');
      $student->TEACHER_NAME = Input::get('teacher_name');
      $student->TEACHER_SURNAME = Input::get('teacher_last_name');

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
