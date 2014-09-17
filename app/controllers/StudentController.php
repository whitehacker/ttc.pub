<?php

class StudentController extends BaseController {

  public function getStudent(){
    return View::make('user.students');

  }
  public function postStudent(){

    $validate = Validator::make(Input::all(), array(
      'q1' => 'required',
      'q2' => 'required',
      'q3' => 'required'
    ));
    if($validate ->fails()){
      return Redirect::route('postStudent')->withErrors($validate)->withInput();
    }
    else{
      $student = new Student();
      $student->q1 = Input::get('q1');
      if($user->save()){
        return Redirect::route('/user/student')->with('success','فورم شما موفقانه در سیستم ثبت ګردید!');
      }
      else{
        return Redirect::route('/user/student')->with('fail','مشکلی رخ داده لطفا دوباره کوشش نمایید!');
      }
    }
  }


}

?>
