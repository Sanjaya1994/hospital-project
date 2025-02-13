<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('identity');
            $table->string('user_name')->unique();
            $table->string('dob');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('password');
            $table->string('street');
            $table->string('role');
            $table->string('no');
            $table->string('city');
            $table->string('email');
            $table->string('Reg_No');
            $table->string('active')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
