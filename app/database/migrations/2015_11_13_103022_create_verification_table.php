<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verification', function($table){
			$table->increments('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('rand_numb');
			$table->string('phone');
			$table->string('photo');
			$table->string('email');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('verification');
	}

}
