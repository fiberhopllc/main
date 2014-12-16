<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrowserlinksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('browserlinks', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('name', 65535);
			$table->text('url', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('browserlinks');
	}

}
