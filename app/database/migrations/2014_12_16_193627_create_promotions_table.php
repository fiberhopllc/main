<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotions', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('item', 65535);
			$table->text('type', 65535);
			$table->text('code', 65535);
			$table->text('discount', 65535);
			$table->decimal('value', 10)->default(0.00);
			$table->date('expirationdate');
			$table->text('packages', 65535);
			$table->text('addons', 65535);
			$table->integer('maxuses');
			$table->integer('uses');
			$table->text('appliesto', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promotions');
	}

}
