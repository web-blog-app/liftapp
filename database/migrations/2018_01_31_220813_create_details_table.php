<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::defaultStringLength(191);
       Schema::create('details', function (Blueprint $table) {
            $table->increments('id');            
            $table->timestamp('date')->nullable();
            $table->string('address', 100);            
            $table->string('number', 100);
            $table->string('detailName', 100);
            $table->string('condition', 100)->default('нужно заказать');            
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
        Schema::dropIfExists('details');
    }
}
