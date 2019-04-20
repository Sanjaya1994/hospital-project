<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('age');
            $table->string('dob');
            $table->string('identity');
            $table->string('address');
            $table->string('phone_number');
            $table->string('appdate');
            $table->string('doctor_fee');
            $table->string('prescription')->default(0);
            $table->string('urine')->default(0);
            $table->string('urine_b')->default(0);
            $table->string('blood_b')->default(0);
            $table->string('blood')->default(0);
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
        Schema::dropIfExists('patients');
    }
}
