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

  }


}

?>
