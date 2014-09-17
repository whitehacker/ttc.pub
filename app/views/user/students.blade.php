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
      <div class="form-group">
  <div class="col-md-8">
    
    <input type="submit" class="btn btn-success" value="ذخیره نمایید!">

  </div>
</div>
    </div>
</div>
</form>

<br/><br/><br/>

@stop
