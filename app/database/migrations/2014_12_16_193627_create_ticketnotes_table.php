<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketnotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticketnotes', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('admin', 65535);
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->text('message', 65535);
			$table->integer('ticketid')->unsigned()->default(0000000000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticketnotes');
	}

}
