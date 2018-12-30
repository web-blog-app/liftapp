<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::defaultStringLength(191);
       Schema::create('changedetails', function (Blueprint $table) {
            $table->increments('id');            
            $table->timestamp('date');
            $table->string('address', 100); 
            $table->string('front', 50);
            $table->string('typeOfLift', 50);                        
            $table->string('detail', 150);                     
            $table->string('notice', 255)->nullable();
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
        Schema::dropIfExists('changedetails');
    }
}
