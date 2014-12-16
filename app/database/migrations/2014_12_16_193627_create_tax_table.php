<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tax', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('name', 65535);
			$table->text('state', 65535);
			$table->text('country', 65535);
			$table->decimal('taxrate', 10)->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tax');
	}

}
