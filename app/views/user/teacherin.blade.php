@extends('layouts.master')
@section('head')
  @parent
  <title>HOME ::  Lecturer Interview Form</title>
@endsection

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">{{ Session::get('success') }}</div>
@elseif (Session::has('fail'))
<div class="alert alert-danger">{{ Session::get('fail') }}</div>
@endif
<h2>فورم مصاحبه با استاد</h2>
<hr/>

<form action="{{ URL::route('postTeacherin') }}" method="post">
  <div class="container">
    <div class="row">
      <h4 class="text-muted">مشخصات دارالمعلمین</h4>
        <div class="col-md-3">

            <div class="form-group">
                <label>ولایت</label>
                <input type="text" class="form-control" name="teachin_pro">
            </div>
            @if($errors->has('teachin_pro'))
              {{ $errors->first('teachin_pro') }}
            @endif
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>اسم دارالمعلمین</label>
                <input type="text" class="form-control" name="teachin_ttc_name">
                @if($errors->has('teachin_ttc_name'))
                  {{ $errors->first('teachin_ttc_name') }}
                @endif
            </div>
        </div>

      <div class="col-md-3">
        <div class="form-group">
            <label>اسم استاد</label>
            <input type="text" class="form-control" name="teachin_teacher_name">
            @if($errors->has('teachin_teacher_name'))
              {{ $errors->first('teachin_teacher_name') }}
            @endif
        </div>
      </div>

      
    </div>





<!-- ختم جهارم -->


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
