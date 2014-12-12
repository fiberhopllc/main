<?php

use Illuminate\Database\Schema\Blueprint;
use PragmaRX\Support\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function migrateUp()
	{
		Schema::create('users', function(Blueprint $table)
		{
            $table->increments('id')->unsigned();
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->text('permissions')->nullable();
            $table->boolean('activated');
            $table->string('activation_code', 255)->nullable();
            $table->string('activated_at', 255)->nullable();
            $table->string('last_login', 255)->nullable();
            $table->string('persist_code', 255)->nullable();
            $table->string('reset_password_code', 255)->nullable();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->timestamp('created_at')->default("0000-00-00 00:00:00");
            $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function migrateDown()
	{
		Schema::drop('users');
	}

}
