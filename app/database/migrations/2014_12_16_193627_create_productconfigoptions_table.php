<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductconfigoptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productconfigoptions', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('productid')->unsigned()->default(0000000000);
			$table->text('optionname', 65535);
			$table->text('optiontype', 65535);
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
		Schema::drop('productconfigoptions');
	}

}
