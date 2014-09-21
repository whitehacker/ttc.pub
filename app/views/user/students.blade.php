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

    <!--start1 -->
    <div class="row">
      <h3 class="text-muted">بخش اول: در مورد نصاب </h3>
      <h4 class="text-muted">پرسش ها</h4>
<div class="col-md-3">
  <div class="form-group">
      <label>آیا محتوای درسی برای شما قابل فهم بود؟</label>
    </br></br>
      <select name="q1" class="form-control">
        <option value="">یکی از گزینه ها را انتخاب نمایید</option>
        <option value="1">بلی</option>
        <option value="2">نسبتاً</option>
        <option value="3">نخیر</option>

      </select>

      @if($errors->has('q1'))
        {{ $errors->first('q1') }}
      @endif
  </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      <label>آیا محتوای مواد درسی طوری طرح گریده است که شما را به تحقیق و کارخانگی وادار نماید؟
</label>
      <select name="q2" class="form-control">
        <option value="">یکی از گزینه ها را انتخاب نمایید</option>
        <option value="1">بلی</option>
        <option value="2">نسبتاً</option>
        <option value="3">نخیر</option>

      </select>

      @if($errors->has('q2'))
        {{ $errors->first('q2') }}
      @endif
  </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      <label>آیا محتوای مواد درسی به نظر مشا در آیدنه در ساحه کاری تان مفید خواهد بود؟
</label>
      <select name="q3" class="form-control">
        <option value="">یکی از گزینه ها را انتخاب نمایید</option>
        <option value="1">بلی</option>
        <option value="2">نسبتاً</option>
        <option value="3">نخیر</option>

      </select>

      @if($errors->has('q3'))
        {{ $errors->first('q3') }}
      @endif
  </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      <label>آیا محتوای مواد درسی شما را در تدریس مضامین در دوره مکتب قادر میسازد؟
</label>
      <select name="q4" class="form-control">
        <option value="">یکی از گزینه ها را انتخاب نمایید</option>
        <option value="1">بلی</option>
        <option value="2">نسبتاً</option>
        <option value="3">نخیر</option>

      </select>

      @if($errors->has('q4'))
        {{ $errors->first('q4') }}
      @endif
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
      <label>آیا مفاهیم موضوعات کتاب درسی شما قابل فهم و درک است؟

</label>
      <select name="q5" class="form-control">
        <option value="">یکی از گزینه ها را انتخاب نمایید</option>
        <option value="1">بلی</option>
        <option value="2">نسبتاً</option>
        <option value="3">نخیر</option>

      </select>

      @if($errors->has('q5'))
        {{ $errors->first('q5') }}
      @endif
  </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      <label>آیا محتوای مواد درسی شما موضوعات جدید و مطابق به نیازهای زمان است؟
</label>
      <select name="q6" class="form-control">
        <option value="">یکی از گزینه ها را انتخاب نمایید</option>
        <option value="1">بلی</option>
        <option value="2">نسبتاً</option>
        <option value="3">نخیر</option>

      </select>

      @if($errors->has('q6'))
        {{ $errors->first('q6') }}
      @endif
  </div>
</div>
<div class="col-md-3">
  <div class="form-group">
      <label>آیا از دید شما موضوعات محتوای درسی با یکدیگر تسلسل منطقی دارد؟
</label>
      <select name="q7" class="form-control">
        <option value="">یکی از گزینه ها را انتخاب نمایید</option>
        <option value="1">بلی</option>
        <option value="2">نسبتاً</option>
        <option value="3">نخیر</option>

      </select>

      @if($errors->has('q7'))
        {{ $errors->first('q7') }}
      @endif
  </div>
</div>


    </div>

  <!-- end1 -->
  <!--start2 -->
  <div class="row">
    <h3 class="text-muted">بخش دوم: درمورد لیلیه</h3>
    <h4 class="text-muted">پرسش ها</h4>
<div class="col-md-3">
<div class="form-group">
    <label>آیا اعاشه به وقت معین برای تان داده میشود؟
    </label>
  </br></br>

    <select name="q8" class="form-control">
      <option value="">یکی از گزینه ها را انتخاب نمایید</option>
      <option value="1">بلی</option>
      <option value="2">نسبتاً</option>
      <option value="3">نخیر</option>

    </select>

    @if($errors->has('q8'))
      {{ $errors->first('q8') }}
    @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
    <label>آیا اعاشه مظابق نورم برای تان داده میشود؟
</label>
</br></br>
    <select name="q9" class="form-control">
      <option value="">یکی از گزینه ها را انتخاب نمایید</option>
      <option value="1">بلی</option>
      <option value="2">نسبتاً</option>
      <option value="3">نخیر</option>

    </select>

    @if($errors->has('q9'))
      {{ $errors->first('q9') }}
    @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
    <label>آیا اعاشه شما بطورصحی و پاک تهیه میگردد؟
</label>
</br></br>
    <select name="q10" class="form-control">
      <option value="">یکی از گزینه ها را انتخاب نمایید</option>
      <option value="1">بلی</option>
      <option value="2">نسبتاً</option>
      <option value="3">نخیر</option>

    </select>

    @if($errors->has('q10'))
      {{ $errors->first('q10') }}
    @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
    <label>آیا برای توزیع اعاشه تقسم اوقات مناسب موجود است؟
</label>
</br></br>
    <select name="qq11" class="form-control">
      <option value="">یکی از گزینه ها را انتخاب نمایید</option>
      <option value="1">بلی</option>
      <option value="2">نسبتاً</option>
      <option value="3">نخیر</option>

    </select>
@if($errors->has('q11'))
  {{ $errors->first('q11') }}
@endif
</div>
</div>

<div class="col-md-3">
<div class="form-group">
    <label>آیا در تهیه و توزیع اعاشه نماینده محصلین وجود است؟
</label>
</br></br>
    <select name="q12" class="form-control">
      <option value="">یکی از گزینه ها را انتخاب نمایید</option>
      <option value="1">بلی</option>
      <option value="2">نسبتاً</option>
      <option value="3">نخیر</option>

    </select>

    @if($errors->has('q12'))
      {{ $errors->first('q12') }}
    @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
    <label>آیا لوازم ضروری برای بود وباش در لیلیه تهیه گردیده است؟
</label>
    <select name="q13" class="form-control">
      <option value="">یکی از گزینه ها را انتخاب نمایید</option>
      <option value="1">بلی</option>
      <option value="2">نسبتاً</option>
      <option value="3">نخیر</option>

    </select>

    @if($errors->has('q13'))
      {{ $errors->first('q13') }}
    @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
    <label>آیا نظافت لیلیه مناسب است؟
</label>
</br></br>
    <select name="q14" class="form-control">
      <option value="">یکی از گزینه ها را انتخاب نمایید</option>
      <option value="1">بلی</option>
      <option value="2">نسبتاً</option>
      <option value="3">نخیر</option>

    </select>

    @if($errors->has('q14'))
      {{ $errors->first('q14') }}
    @endif
</div>
</div>

<div class="col-md-3">
<div class="form-group">
    <label>آیا شما در نظافت لیلیه سهم فعال میگیرید؟
</label>
</br></br>
    <select name="q15" class="form-control">
      <option value="">یکی از گزینه ها را انتخاب نمایید</option>
      <option value="1">بلی</option>
      <option value="2">نسبتاً</option>
      <option value="3">نخیر</option>

    </select>

    @if($errors->has('q15'))
      {{ $errors->first('q15') }}
    @endif
</div>
</div>


<div class="col-md-3">
<div class="form-group">
     <label>آیا تقسیم اوقات کاری برای محصلین در مورد نظافت لیلیه موجود است؟

 </label>
     <select name="q16" class="form-control">
       <option value="">یکی از گزینه ها را انتخاب نمایید</option>
       <option value="1">بلی</option>
       <option value="2">نسبتاً</option>
       <option value="3">نخیر</option>

     </select>

     @if($errors->has('q16'))
       {{ $errors->first('q16') }}
     @endif
 </div>
 </div>
  <div class="col-md-3">
 <div class="form-group">
     <label>آیا امنیت لیلیه مناسب است؟
 </label>
 </br></br>
     <select name="q17" class="form-control">
       <option value="">یکی از گزینه ها را انتخاب نمایید</option>
       <option value="1">بلی</option>
       <option value="2">نسبتاً</option>
       <option value="3">نخیر</option>

     </select>

     @if($errors->has('q17'))
       {{ $errors->first('q17') }}
     @endif
 </div>
 </div>
<div class="col-md-3">
   <div class="form-group">
     <label>آیا محصلین در برقراری نظم و ارتباطات نیک با محیط وماحول لیلیه سهم میگیرند؟

 </label>
     <select name="q18" class="form-control">
       <option value="">یکی از گزینه ها را انتخاب نمایید</option>
       <option value="1">بلی</option>
       <option value="2">نسبتاً</option>
       <option value="3">نخیر</option>

     </select>

     @if($errors->has('q18'))
       {{ $errors->first('q18') }}
     @endif
 </div>
 </div>
<div class="col-md-3">
 <div class="form-group">
     <label>آیا محصلین در داخل لیلیه با یکدیگر هکاری علمی دارند؟
 </label>
 </br></br>
     <select name="q19" class="form-control">
       <option value="">یکی از گزینه ها را انتخاب نمایید</option>
       <option value="1">بلی</option>
       <option value="2">نسبتاً</option>
       <option value="3">نخیر</option>

     </select>

     @if($errors->has('q19'))
       {{ $errors->first('q19') }}
     @endif
 </div>
 </div>
<div class="col-md-3">
 <div class="form-group">
     <label>آیا مسؤلین لیلیه ها که از مرکز می ایند با شما مصاحبه مینمایند؟

 </label>
     <select name="q20" class="form-control">
       <option value="">یکی از گزینه ها را انتخاب نمایید</option>
       <option value="1">بلی</option>
       <option value="2">نسبتاً</option>
       <option value="3">نخیر</option>

     </select>

     @if($errors->has('q20'))
       {{ $errors->first('q20') }}
     @endif
 </div>
 </div>

  </div>

<!-- end2 -->
<!--start3 -->
<div class="row">
  <h3 class="text-muted">بخش سوم:در مورد استاد</h3>
  <h4 class="text-muted">پرسش ها</h4>
<div class="col-md-3">
<div class="form-group">
  <label>آیا استاد شما در آغاز سمستر لایحه سیستم کریدیت را توضیح نموده است؟
  </label>


  <select name="q21" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q21'))
    {{ $errors->first('q21') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>آیا تدریس مطابق به پالیسی و نصاب تعلیمی تربیه معلم پیش برده میشود؟
</label>

  <select name="q22" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q22'))
    {{ $errors->first('q22') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>آیا استاد لکچر نوت مربوطه خویش را به وقت و زمان معین تهیه مینماید؟
</label>

  <select name="q23" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q23'))
    {{ $errors->first('q23') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>ایا لکچر نوت قابل فهم و مطابق به سویه شما است؟
</label>
</br></br>
  <select name="q24" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q24'))
    {{ $errors->first('q24') }}
  @endif
</div>
</div>

<div class="col-md-3">
<div class="form-group">
  <label>آیا استاد بالای مضمون حاکمیت کامل دارد؟
</label>
</br></br>
  <select name="q25" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q25'))
    {{ $errors->first('q25') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>آیا تدریس او قابل فهم است؟
</label>
</br></br>
  <select name="q26" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q26'))
    {{ $errors->first('q26') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>آیا استاد به سوالات شما پاسخ های قناعت بخش ارایه مینماید؟

</label>

  <select name="q27" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q27'))
    {{ $errors->first('q27') }}
  @endif
</div>
</div>

<div class="col-md-3">
<div class="form-group">
  <label>آیا استاد با پلان منظم و آمادگی قبلی داخل صنف میگردد؟

</label>
</br></br>
  <select name="q28" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q28'))
    {{ $errors->first('q28') }}
  @endif
</div>
</div>


<div class="col-md-3">
<div class="form-group">
   <label>آیا تسسلسل منطقی موضوعات را در تدریس رعایت مینماید؟


</label>
   <select name="q29" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q29'))
     {{ $errors->first('q29') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
   <label>آیا از قوه افاده او راضی هستید؟

</label>
</br></br>
   <select name="q30" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q30'))
     {{ $errors->first('q30') }}
   @endif
</div>
</div>
<div class="col-md-3">
 <div class="form-group">
<label>آیا استاد محصلان را در تحلیل موضوعات سهیم میسازد؟

</label>
</br></br>

   <select name="q31" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q31'))
     {{ $errors->first('q31') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
   <label>آیا محصلان را به سهم گرفتن در تحلیل موضوعات تشویق مینماید؟
</label>

   <select name="q32" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q32'))
     {{ $errors->first('q32') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد عدالت را در صنف مراعات میکند؟
</label>
</br></br>
   <select name="q33" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q33'))
     {{ $errors->first('q33') }}
   @endif
</div>
</div>


<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد با محصلان رابطه صمیمی دارد؟

</label>
</br></br>
   <select name="q34" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q34'))
     {{ $errors->first('q34') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا میخواهید تا در آینده نیز بعضی مضامین شما را تدریس نماید؟
</label>

   <select name="q35" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q35'))
     {{ $errors->first('q35') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد در ارزیابی عدالت را رعایت مینماید؟

</label>
</br></br>
   <select name="q36" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q36'))
     {{ $errors->first('q36') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد وضع ظاهری مناسب دارد؟

</label>
</br></br>
   <select name="q37" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q37'))
     {{ $errors->first('q37') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد از وسایل آموزشی مختلف در تدریس استفاده مینماید؟

</label>

   <select name="q38" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q38'))
     {{ $errors->first('q38') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد محصلان را به کار عملی توظیف مینماید؟

</label>
</br></br>
   <select name="q39" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q39'))
     {{ $errors->first('q39') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد کار خانگی را مودر ارزیابی قرار میدهد؟

</label>
</br></br>
   <select name="q40" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q40'))
     {{ $errors->first('q40') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد در خارج از ساعت درسی خویش با شما در حل مشکلات درسی همکاری مینماید؟


</label>

   <select name="q41" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q41'))
     {{ $errors->first('q41') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد موضوع درس را به زندگی روزمره ارتباط میدهد؟


</label>

   <select name="q42" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q42'))
     {{ $errors->first('q42') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا حضور استاد در صنف منظم و به وقت مشخص میباشد؟


</label>

   <select name="q43" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q43'))
     {{ $errors->first('q43') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا سلوک و رویه استاد به نظر شما خوب است؟


</label>
</br></br>
   <select name="q44" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q44'))
     {{ $errors->first('q44') }}
   @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
     <label>آیا استاد پابند حاضری است؟



</label>
</br></br>
   <select name="q45" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q45'))
     {{ $errors->first('q45') }}
   @endif
</div>
</div><div class="col-md-3">
<div class="form-group">
     <label>آیا از میتود های تدریس استاد راضی هستید؟



</label>
</br></br>
   <select name="q46" class="form-control">
     <option value="">یکی از گزینه ها را انتخاب نمایید</option>
     <option value="1">بلی</option>
     <option value="2">نسبتاً</option>
     <option value="3">نخیر</option>

   </select>

   @if($errors->has('q46'))
     {{ $errors->first('q46') }}
   @endif
</div>
</div>
</div>

<!-- end3 -->

<!-- جهارم-->
<div class="row">
  <h3 class="text-muted">بخش چهارم:در مورد اداره دارالمعلمین
</h3>
  <h4 class="text-muted">پرسش ها</h4>
<div class="col-md-3">
<div class="form-group">
  <label>آیا برخورد اداره با شما سالم است؟

  </label>
</br></br>

  <select name="q47" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q47'))
    {{ $errors->first('q47') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>آیا اداره و تنظیم تدریسی و اداری برای شما مناسب است؟

</label>
</br></br>
  <select name="q48" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q48'))
    {{ $errors->first('q48') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>آیا نظافت دار المعلمین مراعات میگردد؟


</label>
</br></br>
  <select name="q49" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q49'))
    {{ $errors->first('q49') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>آیا شما در تنظیم و نظافت دارالمعلمین سهم فعال میگیرید؟

</label>
</br></br>
  <select name="q50" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q50'))
    {{ $errors->first('q50') }}
  @endif
</div>
</div>

<div class="col-md-3">
<div class="form-group">
  <label> آیا شما برای حل مشکلات شما در دارالمعلمین کدام سیستم موجود است؟

</label>

  <select name="q51" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q51'))
    {{ $errors->first('q51') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>آیا زمینه استفاده از لابراتوار برای شما فراهم گردیده است؟

</label>
  <select name="q52" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q52'))
    {{ $errors->first('q52') }}
  @endif
</div>
</div>
<div class="col-md-3">
<div class="form-group">
  <label>آیا زمینه استفاده از کتابخانه برای شما فراهم گردیده است؟

</label>

  <select name="q53" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q53'))
    {{ $errors->first('q53') }}
  @endif
</div>
</div>

<div class="col-md-3">
<div class="form-group">
  <label>آیا زمینه استفاده از انترنیت برای شما فراهم گردیده است؟

</label>
</br></br>
  <select name="q54" class="form-control">
    <option value="">یکی از گزینه ها را انتخاب نمایید</option>
    <option value="1">بلی</option>
    <option value="2">نسبتاً</option>
    <option value="3">نخیر</option>

  </select>

  @if($errors->has('q54'))
    {{ $errors->first('q54') }}
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
