<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('FORM_NUMBER');
			$table->date('DATE');
			$table->string('MONITORING_PROVINCE');
			$table->string('TTC_NAME');
			$table->string('TEACHER_NAME');
			$table->string('TEACHER_SURNAME');
			$table->string('SUBJECT');
			$table->string('DEPARTMENT');
			$table->string('SEMESTER');
			$table->integer('Q1');
			$table->integer('Q2');
			$table->integer('Q3');
			$table->integer('Q4');
			$table->integer('Q5');
			$table->integer('Q6');
			$table->integer('Q7');
			$table->integer('Q8');
			$table->integer('Q9');
			$table->integer('Q10');
			$table->integer('Q11');
			$table->integer('Q12');
			$table->integer('Q13');
			$table->integer('Q14');
			$table->integer('Q15');
			$table->integer('Q16');
			$table->integer('Q17');
			$table->integer('Q18');
			$table->integer('Q19');
			$table->integer('Q20');
			$table->integer('Q21');
			$table->integer('Q22');
			$table->integer('Q23');
			$table->integer('Q24');
			$table->integer('Q25');
			$table->integer('Q26');
			$table->integer('Q27');
			$table->integer('Q28');
			$table->integer('Q29');
			$table->integer('Q30');
			$table->integer('Q31');
			$table->integer('Q32');
			$table->integer('Q33');
			$table->integer('Q34');
			$table->integer('Q35');
			$table->integer('Q36');
			$table->integer('Q37');
			$table->integer('Q38');
			$table->integer('Q39');
			$table->integer('Q40');
			$table->integer('Q41');
			$table->integer('Q42');
			$table->integer('Q43');
			$table->integer('Q44');
			$table->integer('Q45');
			$table->integer('Q46');
			$table->integer('Q47');
			$table->integer('Q48');
			$table->integer('Q49');
			$table->integer('Q51');
			$table->integer('Q52');
			$table->integer('Q53');
			$table->integer('Q54');
				$table->string('SERVICES');
			$table->string('GENDER');
			$table->string('CLASS');
			$table->string('SUBJECT_END');
			$table->string('SEMESTER_END');
			$table->string('REMARKS');
			$table->integer('User_id');
			$table->integer('D_check_id');
			$table->timestamps();
		});
	}


	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::drop('students');
	}

}
