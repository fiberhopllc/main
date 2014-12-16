<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWhoislogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('whoislog', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->dateTime('date')->default('0000-00-00 00:00:00');
			$table->text('domain', 65535);
			$table->text('ip', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('whoislog');
	}

}
