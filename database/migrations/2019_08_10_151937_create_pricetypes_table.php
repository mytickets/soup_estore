<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('pricetypes');
        Schema::create('pricetypes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ident');
            $table->integer('code_id');
            $table->string('name');
            $table->binary('rxml');
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
        Schema::dropIfExists('pricetypes');
    }
}
