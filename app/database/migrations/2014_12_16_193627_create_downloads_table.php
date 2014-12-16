<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDownloadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('downloads', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('type', 65535);
			$table->integer('category');
			$table->text('title', 65535);
			$table->text('description', 65535);
			$table->text('location', 65535);
			$table->integer('downloads');
			$table->text('clientsonly', 65535);
			$table->text('productdownload', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('downloads');
	}

}
