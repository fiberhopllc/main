<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketmaillogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticketmaillog', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->text('to_address', 65535);
			$table->text('name', 65535);
			$table->text('email', 65535);
			$table->text('subject', 65535);
			$table->text('message', 65535);
			$table->text('status', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticketmaillog');
	}

}
