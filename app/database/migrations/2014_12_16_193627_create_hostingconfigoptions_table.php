<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHostingconfigoptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hostingconfigoptions', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('relid')->unsigned()->default(0000000000);
			$table->integer('configid')->unsigned()->default(0000000000);
			$table->integer('optionid')->unsigned()->default(0000000000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hostingconfigoptions');
	}

}
