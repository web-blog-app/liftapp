<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdditionalWorks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::defaultStringLength(191);
        Schema::create('additionalworks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address', 100); 
            $table->string('front', 50);
            $table->string('typeLift', 50); 
            $table->string('additionalWorks');
            $table->string('pay')->default('не оплачено'); 
            $table->string('humans',100);            
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
        Schema::dropIfExists('additionalworks');
    }
}
