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
        Schema::create('keyss', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('endpoint_id');
            $table->string('key');
            $table->string('value');
            $table->timestamps();

            $table->foreign('endpoint_id')->references('id')->on('endpoints');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keyss');
    }
};
