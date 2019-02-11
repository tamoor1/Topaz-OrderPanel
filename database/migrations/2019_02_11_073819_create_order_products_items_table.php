<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products_items', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('order_id')->references('id')->on('order');
            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('item_heads_id')->references('id')->on('item_heads');
            $table->double('quantity');
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
        Schema::dropIfExists('order_products_items');
    }
}
