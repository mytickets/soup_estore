<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ident')->nullable();
            $table->string('price')->nullable();

            $table->decimal('price_amount', 8, 2)->nullable();
            // $table->set('remote_images', ['strawberry', 'vanilla']);
            $table->json('remote_images')->nullable();

            $table->string('name')->nullable();
            $table->string('desc')->nullable();
            $table->string('image')->nullable();
            $table->string('xml_name')->nullable();
            $table->string ('xml_cat')->nullable();
            $table->integer('cat_id')->unsigned()->default(1);
            $table->boolean('menu')->nullable();
            
        // создание поля для связывания с таблицей user
        // создание внешнего ключа для поля 'user_id', который связан с полем id таблицы 'users'
            // $table->foreign('cat_id')->references('id')->on('cats');

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
        Schema::dropIfExists('products');
    }
}
