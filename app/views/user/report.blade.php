@extends('layouts.master')

@section('head')
  @parent
  <title>HOME ::  Reports</title>
@endsection

@section('content')
  <h2>کاربران</h2>
  <div class="table-responsive">
  <table class="table table-bordered">
    <tr class="info">
      <th>شماره</th><th>اسم</th><th>اسم کاربر</th><th>تاریخ ثبت</th>
    </tr>
      @foreach($users as $user)
        <tr><td>{{ $user->id }}</td>
          <td><a href="{{ URL::route('get_view', array($user->id)) }}">{{ $user->full_name }}</a></td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->created_at }}</td>
        </tr>

      @endforeach
  </table>
</div>

@stop
