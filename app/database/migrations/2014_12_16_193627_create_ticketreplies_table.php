<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketrepliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticketreplies', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('tid')->unsigned()->default(0000000000);
			$table->integer('userid')->unsigned()->default(0000000000);
			$table->text('name', 65535);
			$table->text('email', 65535);
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->text('message', 65535);
			$table->text('admin', 65535);
			$table->text('attachment', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticketreplies');
	}

}
