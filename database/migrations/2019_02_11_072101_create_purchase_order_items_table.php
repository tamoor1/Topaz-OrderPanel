<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order_items', function (Blueprint $table) {
            $table->increments('purchase_order_items_id');
            $table->foreign('purchase_order_id')->refrences('id')->on('purchase_order');
            $table->foreign('raw_items_id')->references('id')->on('raw_items');
            $table->foreign('uom_id')->references('id')->on('units_of_measurement');
            $table->integer('unit_cost');
            $table->integer('total_cost');
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
        Schema::dropIfExists('purchase_order_items');
    }
}
