<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('identity');
            $table->string('lab_R_id');
            $table->string('date');
            $table->string('hgp');
            $table->string('vcm');
            $table->string('rdw');
            $table->string('plt');
            $table->string('leuc');
            $table->string('neut');
            $table->string('linf');
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
        Schema::dropIfExists('labs');

    }
}
