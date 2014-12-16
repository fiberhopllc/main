<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calendar', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('title', 65535);
			$table->text('description', 65535);
			$table->text('day', 65535);
			$table->text('month', 65535);
			$table->text('year', 65535);
			$table->text('startt1', 65535);
			$table->text('startt2', 65535);
			$table->text('endt1', 65535);
			$table->text('endt2', 65535);
			$table->integer('adminid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calendar');
	}

}
