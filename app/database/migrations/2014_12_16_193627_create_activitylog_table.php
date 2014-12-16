<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitylogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activitylog', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->text('description', 65535);
			$table->text('user', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activitylog');
	}

}
