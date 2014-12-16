<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductconfigoptionssubTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productconfigoptionssub', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->integer('configid')->unsigned()->default(0000000000);
			$table->text('optionname', 65535);
			$table->decimal('setup', 10)->default(0.00);
			$table->decimal('price', 10)->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productconfigoptionssub');
	}

}
