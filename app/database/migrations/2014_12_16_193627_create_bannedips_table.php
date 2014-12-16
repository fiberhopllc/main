<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBannedipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bannedips', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('ip', 65535);
			$table->text('reason', 65535);
			$table->dateTime('expires')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bannedips');
	}

}
