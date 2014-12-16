<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomfieldsvaluesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customfieldsvalues', function(Blueprint $table)
		{
			$table->integer('fieldid');
			$table->integer('relid')->unsigned()->default(0000000000);
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
		Schema::drop('customfieldsvalues');
	}

}
