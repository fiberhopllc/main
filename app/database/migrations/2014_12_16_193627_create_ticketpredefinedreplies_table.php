<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketpredefinedrepliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticketpredefinedreplies', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('catid', 65535);
			$table->text('name', 65535);
			$table->text('reply', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticketpredefinedreplies');
	}

}
