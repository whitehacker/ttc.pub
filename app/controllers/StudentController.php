<?php

class StudentController extends BaseController {

  public function getStudent(){
    return View::make('user.students');

  }
  public function postStudent(){
    $validate = Validator::make(Input::all(), array(
      'pro' => 'required',
      'pass1' => 'required|min:6',
      'pass2' => 'required|same:pass1'
    ));

  }


}

?>
