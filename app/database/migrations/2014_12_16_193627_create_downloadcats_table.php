<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDownloadcatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('downloadcats', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('parentid');
			$table->text('name', 65535);
			$table->text('description', 65535);
			$table->text('hidden', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('downloadcats');
	}

}
