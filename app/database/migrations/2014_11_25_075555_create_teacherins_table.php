<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeacherinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teacherins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('teachin_monitoring_pro');
			$table->string('teachin_ttc_name');
			$table->string('teachin_teacher_name');
			$table->integer('user_id');
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
		Schema::drop('teacherins');
	}

}
