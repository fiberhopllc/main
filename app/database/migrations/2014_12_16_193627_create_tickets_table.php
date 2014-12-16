<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('tid');
			$table->integer('did')->unsigned()->default(000);
			$table->integer('userid')->unsigned()->default(0000000000);
			$table->text('name', 65535);
			$table->text('email', 65535);
			$table->text('c', 65535);
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->text('title', 65535);
			$table->text('message', 65535);
			$table->text('status', 65535);
			$table->text('urgency', 65535);
			$table->text('admin', 65535);
			$table->text('attachment', 65535);
			$table->dateTime('lastreply')->default('0000-00-00 00:00:00');
			$table->integer('flag');
			$table->integer('clientunread');
			$table->integer('adminunread');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tickets');
	}

}
