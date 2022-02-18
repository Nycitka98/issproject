<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoskladudovyrobiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoskladudovyrobies', function (Blueprint $table) {
            $table->id();
            $table->double('zoskladudovyrobydatle', 15, 8);
            $table->double('zoskladudovyrobymandle', 15, 8);
            $table->double('zoskladudovyrobymarcipan', 15, 8);
            $table->double('zoskladudovyrobyorechy', 15, 8);
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
        Schema::dropIfExists('zoskladudovyrobies');
    }
}
