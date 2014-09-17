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

<form>
  <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label>اسم محصل</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>اسم دارالمعلمین</label>
                <input type="text" class="form-control">
            </div>
        </div>

      <div class="col-md-3">
        <div class="form-group">
            <label>ولایت</label>
            <input type="text" class="form-control">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label>ولسوالی</label>
            <input type="text" class="form-control">
        </div>
      </div>
    </div>
</div>
</form>

<h1>Dropdown demo</h1>
      	{{ Form::open() }}
    		    <select id="make" name="make">
    		    	<option>Select Car Make</option>
    		        <option value="1">Kabul</option>
    		        <option value="2">Ghazni</option>
    		        <option value="3">Zabul</option>
    		    </select>
    		    <br>
    		    <select id="model" name="model">
    		    	<option>Please choose car make first</option>
    		    </select>
    		{{ Form::close();}}
<br/><br/><br/>

@stop
