@extends('layouts.master')
@section('head')
  @parent
  <title>HOME ::  TTC Monitoring and Evaluation System</title>
@endsection

@section('content')
@if(Session::has('success'))
  <div class="alert alert-success">{{ Session::get('success') }}</div>
@elseif (Session::has('fail'))
  <div class="alert alert-danger">{{ Session::get('fail') }}</div>
@endif

  <h3 class="text-muted">سلام و خوش آمدید!

</h3>

<hr/>
  <p class="text-muted">
    این سیستم برای ذخیره و درج معلومات در مورد نظارت موسسات تربیه معلم انکشاف ګردیده که این معلومات توسط اعضای محترم علمی ریاست عمومی تربیه معلم ذخیره میګردد.
    برای استفاده ازین سیستم شما باید دارای اسم کاربر و شفر باشید تا بتوانید ازین سیستم استفاده نمایید!

    مدت ثبت نام درین سیستم محدود میباشد با تکمیل شدن ثبت نام تمام اعضا بخش ثبت نام غیر فعال ګردیده و بعدا نمی توانید ثبت نام نمایید!

    اسم کاربر و شفر خویش را به یاد داشته باشید!
  </p>




@endsection
