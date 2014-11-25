<?php

class TeacherController extends BaseController {

  public function postTeacherin(){
    $validate = Validator::make(Input::all(), array(
      'teachin_pro' => 'required|min:3',
      'teachin_ttc_name' => 'required',
      'teachin_teacher_name' => 'required'
    ));
    if($validate ->fails()){
      return Redirect::route('getTeachin')->withErrors($validate)->withInput();
    }
    else{
      $teachins = new Teacherins();
      $teachins->teachin_monitoring_pro = Input::get('teachin_pro');
      $teachins->teachin_ttc_name = Input::get('teachin_ttc_name');
      $teachins->teachin_teacher_name = Input::get('teachin_teacher_name');
      $teachins->user_id = Auth::user()->getUserId();
      
      if($teachins->save()){
        return Redirect::route('getTeachin')->with('success','فورم شما موفقانه ثبت ګردید!!');
      }
      else{
        return Redirect::route('getTeachin')->with('fail','مشکلی رخ داد لطفا دوباره کوشش نمایید!');
      }
      
    }
    
  }
  public function getTeacherhsob(){
      return View::make('user.teachersob');

  }

  public function postTeachersob(){


  }

}

?>
