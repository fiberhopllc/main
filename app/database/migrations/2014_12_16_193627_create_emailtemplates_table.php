<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailtemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emailtemplates', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('type', 65535);
			$table->text('name', 65535);
			$table->text('subject', 65535);
			$table->text('message', 65535);
			$table->text('fromname', 65535);
			$table->text('fromemail', 65535);
			$table->text('disabled', 65535);
			$table->text('custom', 65535);
			$table->text('language', 65535);
			$table->text('copyto', 65535);
			$table->integer('plaintext');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('emailtemplates');
	}

}
