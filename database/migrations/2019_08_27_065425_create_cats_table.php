<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cats');
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ident')->nullable();
            $table->string('name')->nullable();
            $table->string('desc')->nullable();
            $table->string('image')->nullable();
            $table->string('xml_name')->nullable();
            $table->boolean('menu')->nullable();
            $table->boolean('menu_left')->nullable();
            $table->integer('parent_id')->nullable();
            // $table->foreign('parent_id')->references('id')->on('cats');
            // $table->nestedSet();
            // TODO boolean published
        //создание поля для связывания с таблицей user
        // $table->integer('user_id')->unsigned()->default(1);
        //создание внешнего ключа для поля 'user_id', который связан с полем id таблицы 'users'
        // $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('cats');
    }
}
