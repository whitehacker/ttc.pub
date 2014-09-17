@extends('layouts.master')
@section('head')
  @parent
  <title>HOME ::  Students Interview Form</title>
@endsection

@section('content')
@if(Session::has('success'))
  <div class="alert alert-success">{{ Session::get('success') }}</div>
@elseif (Session::has('fail'))
  <div class="alert alert-danger">{{ Session::get('fail') }}</div>
@endif
<h3>فورم مصاحبه با محصل</h3>
<hr/>
<!--<h3 class="alert alert-warning"> استاد محترم{{ Auth::user()->getUserId() }} خوش آمدید!</h3>-->

<form action="{{ URL::route('postStudent') }}" method="post">
  <div class="container">
    <div class="row">
      <h4 class="text-muted">مشخصات دارالمعلمین</h4>
        <div class="col-md-3">

            <div class="form-group">
                <label>ولایت</label>
                <input type="text" class="form-control" name="pro">
            </div>
            @if($errors->has('pro'))
              {{ $errors->first('pro') }}
            @endif
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>اسم دارالمعلمین</label>
                <input type="text" class="form-control" name="ttc_name">
                @if($errors->has('ttc_name'))
                  {{ $errors->first('ttc_name') }}
                @endif
            </div>
        </div>

      <div class="col-md-3">
        <div class="form-group">
            <label>اسم استاد</label>
            <input type="text" class="form-control" name="teacher_name">
            @if($errors->has('teacher_name'))
              {{ $errors->first('teacher_name') }}
            @endif
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label>تخلص استاد</label>
            <input type="text" class="form-control" name="teacher_last_name">
            @if($errors->has('teacher_last_name'))
              {{ $errors->first('teacher_last_name') }}
            @endif
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-md-3">
        <div class="form-group">
            <label>مضمون</label>
            <input type="text" class="form-control" name="subject">
            @if($errors->has('subject'))
              {{ $errors->first('subject') }}
            @endif
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label>دیپارتمنت</label>
            <select name="department" class="form-control">
              <option value="">دیپارتمنت را انتخاب نمایید!</option>
              <option value="ساینس">ساینس</option>
              <option value="ریاضی">ریاضی</option>
              <option value"روانشناسي">روانشناسي</option>
                <option value"علوم دینی">فزیک</option>
                  <option value"علوم اجتماعی">علوم اجتماعی</option>
                    <option value"انګلیسی">انګلیسی</option>
                      <option value"دری">دری</option>
                        <option value"پښتو">پښتو</option>
                          <option value"کمپیوتر ساینس">کمپیوتر ساینس</option>

            </select>

            @if($errors->has('department'))
              {{ $errors->first('department') }}
            @endif
        </div>
      </div>

        <div class="col-md-3">
          <div class="form-group">
              <label>سمستر</label>
              <input type="text" class="form-control" name="semester">
              @if($errors->has('semester'))
                {{ $errors->first('semester') }}
              @endif
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
              <label>تاریخ</label>
              <input type="text" id ="date1" class="form-control" name="date">
              @if($errors->has('date'))
                {{ $errors->first('date') }}
              @endif
          </div>
        </div>

    </div>

    <div class="row">
      <h4 class="text-muted">مشخصات مصاحبه شونده</h4>
        <div class="col-md-3">
          <div class="form-group">
              <label>جنسیت</label>
              <br/>
              <label class="radio-inline">
      <input type="radio" name="gender" id="radios-0" value="مرد">
      مرد
    </label>

    <label class="radio-inline" for="radios-0">
<input type="radio" name="gender" id="radios-0" value="زن">
زن
</label>
              @if($errors->has('gender'))
                {{ $errors->first('gender') }}
              @endif
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
              <label>صنف</label>
              <input type="text" class="form-control" name="class">
              @if($errors->has('class'))
                {{ $errors->first('class') }}
              @endif
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
              <label>سمستر</label>
              <input type="text" class="form-control" name="st_semester">
              @if($errors->has('st_semester'))
                {{ $errors->first('st_semester') }}
              @endif
          </div>
        </div>

        <div class="col-md-3">
          <div class="form-group">
              <label>مضمون</label>
              <input type="text" class="form-control" name="st_subject">
              @if($errors->has('st_subject'))
                {{ $errors->first('st_subject') }}
              @endif
          </div>
        </div>

    </div>
    <hr/>
    <div class="row">
      <div class="form-group">
  <div class="col-md-8">

    <input type="submit" class="btn btn-success" value="ذخیره نمایید!">

  </div>
</div>
    </div>
</div>
</form>

<br/><br/><br/>
<script>
            $(document).ready(function() {
                $("#date1").datepicker({
                    dateFormat: "yy-mm-dd"
                });

            });
        </script>
@stop
