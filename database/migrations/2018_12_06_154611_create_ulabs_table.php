<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUlabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ulabs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lab_id');
            $table->string('first_name');
            $table->string('identity');
            $table->string('color');
            $table->string('appearance');
            $table->string('ph');
            $table->string('glucose');
            $table->string('wpc');
            $table->string('rbc');
            $table->string('protein');
            $table->string('l_Fee');
            $table->string('status');
            $table->string('active');
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
        Schema::dropIfExists('ulabs');
    }
}
