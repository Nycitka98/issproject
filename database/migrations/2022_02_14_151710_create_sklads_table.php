<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkladsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sklads', function (Blueprint $table) {
            $table->id();
            $table->double('datle', 15, 8);
            $table->double('mandle', 15, 8);
            $table->double('marcipan', 15, 8);
            $table->double('orechy', 15, 8);
            
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
        Schema::dropIfExists('sklads');
    }
}
