<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_employee', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('emp_firstname');
            $table->string('emp_middlename');
            $table->string('emp_lastname');
            $table->string('emp_gender');
            $table->string('emp_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('tbl_employee');
    }
}
