<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class CreateTicketsTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('tickets', function (Blueprint $table) {
                $table->integer('id')->primary();
                $table->integer('customer_id');
                $table->integer('category_id');
                $table->binary('assigned');
                $table->integer('employee_id');
                $table->string('subject');
                $table->text('body');
                $table->timestamps();
                $table->softDeletes();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::drop('tickets');
        }

    }
