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
            $table->date('date');
            $table->string('address', 100);
            $table->string('front', 50);
            $table->string('typeOfLift', 50);
            $table->string('typeOfError')->nullable();
            $table->string('condition', 50);
            $table->text('work')->nullable();
            $table->string('notice')->nullable();
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
