@extends('layouts.master')
@section('head')
  @parent
  <title>HOME ::  Users Reports</title>
@endsection

@section('content')




<h4 class="text-info">
  راپور های ثبت شده شما!
  {{ $user->full_name }}
</h4>
<hr/>
<a href="{{ URL::route('user_report', array($user->id)) }}">{{ $user->full_name }}</a>
<table class="table table-bordered">
  <tr class="success">
    <th>شماره</th>
    <th>
ولایت
    </th>

    <th>
      اسم دارالمعلمین
    </th>
    <th>
      اسم استاد
    </th>

    <th>
      مضمون
    </th>

    <th>
      دیپارتمنت
    </th>
    <th>
      تاریخ
    </th>
  </tr>
  <?php $i=1; ?>
  @foreach($user->students as $student)
  <tr>
    <td>{{ $i++ }}</td>
    <td>{{ $student->MONITORING_PROVINCE }}</td>
    <td>{{ $student->TTC_NAME }}</td>
    <td>{{ $student->TEACHER_NAME }}</td>
    <td>{{ $student->SUBJECT }}</td>
    <td>{{ $student->DEPARTMENT }}</td>
    <td>{{ $student->created_at }}</td>
</tr>
@endforeach
<tr class="danger">
  <th colspan=3>
  مجموع فورم های ثبت شده!

</th>
  <th colspan=4>{{ $i-1 }}</th>
</tr>
</table>
<br/><br/>
@endsection
