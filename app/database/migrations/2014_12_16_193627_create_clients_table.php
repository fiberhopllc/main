<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->text('firstname', 65535);
			$table->text('lastname', 65535);
			$table->text('companyname', 65535);
			$table->text('email', 65535);
			$table->text('address1', 65535);
			$table->text('address2', 65535);
			$table->text('city', 65535);
			$table->text('state', 65535);
			$table->text('postcode', 65535);
			$table->text('country', 65535);
			$table->text('phonenumber', 65535);
			$table->text('password', 65535);
			$table->decimal('credit', 10)->default(0.00);
			$table->text('taxexempt', 65535);
			$table->date('datecreated')->default('0000-00-00');
			$table->text('notes', 65535);
			$table->string('cardtype');
			$table->binary('cardnum', 65535);
			$table->binary('startdate', 65535);
			$table->binary('expdate', 65535);
			$table->binary('issuenumber', 65535);
			$table->dateTime('lastlogin');
			$table->text('ip', 65535);
			$table->text('host', 65535);
			$table->text('status', 65535);
			$table->text('language', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients');
	}

}
