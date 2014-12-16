<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomfieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customfields', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('type', 65535);
			$table->integer('relid')->unsigned()->default(0000000000);
			$table->text('num', 65535);
			$table->text('fieldname', 65535);
			$table->text('fieldtype', 65535);
			$table->text('fieldoptions', 65535);
			$table->text('adminonly', 65535);
			$table->text('required', 65535);
			$table->text('show_order_', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customfields');
	}

}
