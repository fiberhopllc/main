<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addons', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('packages', 65535);
			$table->text('name', 65535);
			$table->text('description', 65535);
			$table->decimal('recurring', 10)->default(0.00);
			$table->decimal('setupfee', 10)->default(0.00);
			$table->text('billingcycle', 65535);
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
		Schema::drop('addons');
	}

}
