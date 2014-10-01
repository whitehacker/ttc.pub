@extends('layouts.master')

@section('head')
  @parent
  <title>HOME ::  View User Forms</title>
@endsection

@section('content')
<h3>
  راپور های ثبت شده استاد
  {{ $user->full_name }}
</h3>
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
@stop
