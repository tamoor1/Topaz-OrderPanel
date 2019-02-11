<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverallInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overall_inventory', function (Blueprint $table) {
            $table->increments('inventory_id');
            $table->foreign('raw_items_id')->references('id')->on('raw_items');
            $table->foreign('uom_id')->references('id')->on('units_of_measurement');
            $table->double('average_price');
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
        Schema::dropIfExists('overall_inventory');
    }
}
