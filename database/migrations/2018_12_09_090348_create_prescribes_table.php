<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescribes', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('first_name');
            $table->string('age');
            $table->string('bp');
            $table->string('diagnose');
            $table->string('invest');
            $table->string('medname')->nullable();
            $table->string('medname01')->nullable();
            $table->string('medname02')->nullable();
            $table->string('medname03')->nullable();
            $table->string('medname04')->nullable();
            $table->string('medname05')->nullable();
            $table->string('dose')->nullable();
            $table->string('dose01')->nullable();
            $table->string('dose02')->nullable();
            $table->string('dose03')->nullable();
            $table->string('dose04')->nullable();
            $table->string('dose05')->nullable();
            $table->string('route')->nullable();
            $table->string('route01')->nullable();
            $table->string('route02')->nullable();
            $table->string('route03')->nullable();
            $table->string('route04')->nullable();
            $table->string('route05')->nullable();
            $table->string('duration')->nullable();
            $table->string('duration01')->nullable();
            $table->string('duration02')->nullable();
            $table->string('duration03')->nullable();
            $table->string('duration04')->nullable();
            $table->string('duration05')->nullable();
            $table->string('plans');
            $table->string('bday');
           
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
        Schema::dropIfExists('prescribes');
    }
}
