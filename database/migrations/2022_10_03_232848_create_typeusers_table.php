<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeusers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned(); 
            $table->foreign('users_id')->references('id')->on('users'); 
            $table->string('type_user');
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
        Schema::dropIfExists('typeusers');
    }
};