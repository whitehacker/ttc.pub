<?php

class StudentController extends BaseController {

  public function getStudent(){
    return View::make('user.students');

  }

  public function postStudent(){
    $validate = Validator::make(Input::all(), array(
      'pro' => 'required|min:3',
      'ttc_name' => 'required',
      'teacher_name' => 'required'
      /*
      'teacher_last_name' => 'required',
      'subject' => 'required',
      'department' => 'required',
      'semester' => 'required',
      'date' => 'required',
      'gender' => 'required',
      'class' => 'required',
      'st_semester' => 'required',
      'st_subject' => 'required',

      'q1' => 'required',
      'q2' => 'required',
      'q3' => 'required',
      'q4' => 'required',
      'q5' => 'required',
      'q6' => 'required',
      'q7' => 'required',
      'q8' => 'required',
      'q9' => 'required',
      'q10' => 'required',
     'q11' => 'required',
     'q12' => 'required',
     'q13' => 'required',
     'q14' => 'required',
     'q15' => 'required',
     'q16' => 'required',
     'q17' => 'required',
     'q18' => 'required',
     'q19' => 'required',
     'q20' => 'required',
     'q21' => 'required',
     'q22' => 'required',
     'q23' => 'required',
     'q24' => 'required',
     'q25' => 'required',
     'q26' => 'required',
     'q27' => 'required',
     'q28' => 'required',
     'q29' => 'required',
     'q30' => 'required',
     'q31' => 'required',
     'q32' => 'required',
     'q33' => 'required',
     'q34' => 'required',
     'q35' => 'required',
     'q36' => 'required',
     'q37' => 'required',
     'q38' => 'required',
     'q39' => 'required',
     'q40' => 'required',
     'q41' => 'required',
     'q42' => 'required',
     'q43' => 'required',
     'q44' => 'required',
     'q45' => 'required',
     'q46' => 'required',
     'q47' => 'required',
     'q48' => 'required',
     'q49' => 'required',
     'q50' => 'required',
     'q51' => 'required',
     'q52' => 'required',
     'q53' => 'required',
     'q54' => 'required'
*/

    ));
    if($validate ->fails()){
      return Redirect::route('getStudent')->withErrors($validate)->withInput();
    }
    else{
      $student = new Students();
      //$user= new User();
      $student->MONITORING_PROVINCE = Input::get('pro');
      $student->TTC_NAME = Input::get('ttc_name');
      $student->TEACHER_NAME = Input::get('teacher_name');
      $student->TEACHER_SURNAME = Input::get('teacher_last_name');
      $student->SUBJECT = Input::get('subject');
      $student->DEPARTMENT = Input::get('department');
      $student->SEMESTER	 = Input::get('semester');
      $student->DATE	 = Input::get('date');
      $student->GENDER = Input::get('gender');
      $student->CLASS = Input::get('class');
      $student->SEMESTER_END = Input::get('st_semester');
      $student->SUBJECT_END = Input::get('st_subject');
      $student->Q1 = Input::get('q1');
      $student->Q2 = Input::get('q2');
      $student->Q3 = Input::get('q3');
      $student->Q4 = Input::get('q4');
      $student->Q5 = Input::get('q5');
      $student->Q6 = Input::get('q6');
      $student->Q7 = Input::get('q7');
      $student->Q8 = Input::get('q8');
      $student->Q9 = Input::get('q9');
      $student->Q10 = Input::get('q10');
      $student->Q11 = Input::get('q11');
      $student->Q12 = Input::get('q12');
      $student->Q13 = Input::get('q13');
      $student->Q14 = Input::get('q14');
      $student->Q15 = Input::get('q15');
      $student->Q16 = Input::get('q16');
      $student->Q17 = Input::get('q17');
      $student->Q18 = Input::get('q18');
      $student->Q19 = Input::get('q19');
      $student->Q20 = Input::get('q20');
      $student->Q21 = Input::get('q21');
      $student->Q22 = Input::get('q22');
      $student->Q23 = Input::get('q23');
      $student->Q24 = Input::get('q24');
      $student->Q25 = Input::get('q25');
      $student->Q26 = Input::get('q26');
      $student->Q27 = Input::get('q27');
      $student->Q28 = Input::get('q28');
      $student->Q29 = Input::get('q29');
      $student->Q30 = Input::get('q30');
      $student->Q31 = Input::get('q31');
      $student->Q32 = Input::get('q32');
      $student->Q33 = Input::get('q33');
      $student->Q34 = Input::get('q34');
      $student->Q35 = Input::get('q35');
      $student->Q36 = Input::get('q36');
      $student->Q37 = Input::get('q37');
      $student->Q38 = Input::get('q38');
      $student->Q39 = Input::get('q39');
      $student->Q40 = Input::get('q40');
      $student->Q41 = Input::get('q41');
      $student->Q42 = Input::get('q42');
      $student->Q43 = Input::get('q43');
      $student->Q44 = Input::get('q44');
      $student->Q45 = Input::get('q45');
      $student->Q46 = Input::get('q46');
      $student->Q47 = Input::get('q47');
      $student->Q48 = Input::get('q48');
      $student->Q49 = Input::get('q49');
      $student->Q50 = Input::get('q50');
      $student->Q51 = Input::get('q51');
      $student->Q52 = Input::get('q52');
      $student->Q53 = Input::get('q53');
      $student->Q54 = Input::get('q54');

      $student->User_id = Auth::user()->getUserId();

      if($student->save()){
        return Redirect::route('getStudent')->with('success','فورم شما موفقانه ثبت ګردید!!');
      }
      else{
        return Redirect::route('getStudent')->with('fail','مشکلی رخ داد لطفا دوباره کوشش نمایید!');
      }
    }
  }


}

?>
