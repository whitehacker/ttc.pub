<?php

class UserController extends BaseController {

  // gets the view for the register page
  public function getCreate(){

    return View::make('user.register');
  }

  public function getLogin(){
     return View::make('user.login');

  }
  public function postCreate(){
    $validate = Validator::make(Input::all(), array(
      'username' => 'required|unique:users|min:4',
      'pass1' => 'required|min:6',
      'pass2' => 'required|same:pass1'
    ));

    if($validate ->fails()){
      return Redirect::route('getCreate')->withErrors($validate)->withInput();
    }
    else{
      $user = new User();
      $user->username = Input::get('username');
      $user->password = Hash::make(Input::get('pass1'));

      if($user->save()){
        return Redirect::route('home')->with('success','شما موفقانه اکونت خویش را ایجاد نمودید حالا میتوانید داخل سیستم شوید!');
      }
      else{
        return Redirect::route('home')->with('fail','آه! مشکلی رخ داد شما در سیستم راجستر نشدید دوباره کوشش نمایید!');
      }
    }

  }
  public function postLogin(){
      $validator= Validator::make(Input::all(), array(
          'username' => 'required',
          'pass1' => 'required'
      ));
      if($validator->fails()){
        return Redirect::route('getLogin')->withErrors($validator)->withInput();
      }
      else{
        $remember = (Input::has('remeber')) ? true : false;
        $auth = Auth::attempt(array(
          'username' => Input::get('username'),
          'password' => Input::get('pass1')
        ), $remember);
        if($auth){
          $user = Auth::user();
          $name = User::find($user->id)->name();
          return Redirect::intended('/');

        }
        else{
          return Redirect::route('getLogin')->with('fail', 'اسم کاربر و یا شفر شما غلط میباشد لطفا معلومات درست خویش را وارد سازید!');
        }
      }
  }


  public function getLogout(){
    Auth::logout();
    return Redirect::route('home');
  }

  public function getHelp(){
    return View::make('help');
  }

  public function getTeacherinIndex(){
    return View::make('user.teacherin');

  }
  public function getContact(){
    return View::make('contact');
  }

    public function view_users(){
      return View::make('user.report')
        ->with('users', User::orderBy('id')->get());
    }

    public function get_view($id){
      $user = User::where('id', $id)->firstOrFail();
      return View::make('user.view')->with('user', $user);
    }
}
