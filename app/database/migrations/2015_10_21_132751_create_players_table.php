<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function($table){
			$table->increments('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('phone');
			$table->string('id_no');
			$table->string('email')->unique();
			$table->string('location');
			$table->string('category');
			$table->string('team_id');
			$table->string('school');
			$table->date('dob');
			$table->string('photo')->unique();
			$table->string('rand_num');
			$table->rememberToken();
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
		Schema::drop('players');
	}

}
