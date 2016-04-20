<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team', function($table){
			$table->increments('id');
			$table->string('teamname');
			$table->string('location');
			$table->string('category');
			$table->string('captain1');
			$table->string('email1')->unique();
			$table->string('phone1');
			$table->string('captain2');
			$table->string('email2')->unique();
			$table->string('phone2');
			$table->string ('rand_num');
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
		Schema::drop('team');
	}

}
