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
        Schema::defaultStringLength(191);
        Schema::create('lifterrors', function (Blueprint $table) {
            $table->increments('id');            
            $table->date('date');
            $table->string('seizing', 50)->nullable();
            $table->string('address', 100);
            $table->string('front', 50);
            $table->string('typeLift', 50);
            $table->string('typeError')->nullable();
            $table->string('floor', 50)->nullable();
            $table->string('condition', 50);
            $table->text('work')->nullable();
            $table->string('notice')->nullable();
            $table->string('human', 50);
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
