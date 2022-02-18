<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVydajskladsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vydajsklads', function (Blueprint $table) {
            $table->id();
            $table->double('vydajdatle', 15, 8);
            $table->double('vydajmandle', 15, 8);
            $table->double('vydajmarcipan', 15, 8);
            $table->double('vydajorechy', 15, 8);
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
        Schema::dropIfExists('vydajsklads');
    }
}
