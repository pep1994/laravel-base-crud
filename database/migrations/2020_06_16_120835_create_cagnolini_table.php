<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCagnoliniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cagnolini', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->integer('height');
            $table->integer('weight');
        });
    }

    /**
    * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cagnolini');
    }
}
