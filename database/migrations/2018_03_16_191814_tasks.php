<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address', 100);
            $table->string('front', 50);
            $table->string('typeLift', 50);
            $table->string('task');
            $table->string('condition')->default('Не выполнено');
            $table->string('fotoTask');
            $table->string('human', 50);            
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
         Schema::dropIfExists('tasks');
    }
}
