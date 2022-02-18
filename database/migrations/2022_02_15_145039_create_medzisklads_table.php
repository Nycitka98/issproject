<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedziskladsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medzisklads', function (Blueprint $table) {
            $table->id();
            $table->double('medzidatle', 15, 8);
            $table->double('medzimandle', 15, 8);
            $table->double('medzimarcipan', 15, 8);
            $table->double('medziorechy', 15, 8);
            
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
        Schema::dropIfExists('medzisklads');
    }
}
