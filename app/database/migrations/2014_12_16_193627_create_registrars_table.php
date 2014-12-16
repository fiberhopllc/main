<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registrars', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('registrar', 65535);
			$table->text('setting', 65535);
			$table->text('value', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registrars');
	}

}
