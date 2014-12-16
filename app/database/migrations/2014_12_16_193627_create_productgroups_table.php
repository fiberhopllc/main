<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductgroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productgroups', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('name', 65535);
			$table->text('disabledgateways', 65535);
			$table->text('hidden', 65535);
			$table->integer('_order_');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productgroups');
	}

}
