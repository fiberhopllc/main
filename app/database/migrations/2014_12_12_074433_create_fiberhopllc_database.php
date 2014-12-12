<?php
//
// NOTE Migration Created: 2014-12-12 07:44:33
// --------------------------------------------------
    class CreateFiberhopllcDatabase {
//
// NOTE - Make changes to the database.
// --------------------------------------------------
        public function up()
        {
//
// NOTE -- groups
// --------------------------------------------------
            Schema::create('groups', function ($table) {
                $table->increments('id')->unsigned();
                $table->string('name', 255)->unique();
                $table->text('permissions')->nullable();
                $table->timestamp('created_at')->default("0000-00-00 00:00:00");
                $table->timestamp('updated_at')->default("0000-00-00 00:00:00");
            });

//
// NOTE -- throttle
// --------------------------------------------------
            Schema::create('throttle', function ($table) {
                $table->increments('id')->unsigned();
                $table->unsignedInteger('user_id')->unsigned();
                $table->string('ip_address', 255)->nullable();
                $table->unsignedInteger('attempts');
                $table->boolean('suspended');
                $table->boolean('banned');
                $table->timestamp('last_attempt_at')->nullable();
                $table->timestamp('suspended_at')->nullable();
                $table->timestamp('banned_at')->nullable();
            });


//
// NOTE -- users_groups
// --------------------------------------------------
            Schema::create('users_groups', function ($table) {
                $table->increments('id')->unsigned();
                $table->unsignedInteger('user_id')->unsigned();
                $table->unsignedInteger('group_id')->unsigned();
            });

        }
    }