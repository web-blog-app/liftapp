<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLifterrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lifterrors', function (Blueprint $table) {
            $table->increments('id');            
            $table->date('Date');
            $table->string('Address');
            $table->string('Front');
            $table->string('TypeOfLift');
            $table->string('TypeOfError');
            $table->text('Work');
            $table->string('Notice');
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
       Schema::dropIfExists('lifterrors');
    }
}
