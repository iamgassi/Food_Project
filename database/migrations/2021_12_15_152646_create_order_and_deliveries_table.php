<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderAndDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_and_deliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('items');
            $table->integer('zip');
            $table->string('address1');
            $table->string('address2');
            $table->integer('contact');
            $table->string('city');
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
        Schema::dropIfExists('order_and_deliveries');
    }
}
