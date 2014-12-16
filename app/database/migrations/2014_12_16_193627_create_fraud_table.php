<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFraudTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fraud', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('fraud', 65535);
			$table->text('setting', 65535);
			$table->text('value', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fraud');
	}

}
