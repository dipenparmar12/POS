<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_id');
            $table->string('order_detail_id');
            // $table->enum('status');// pending for letter
            $table->enum('status',['hold','empty','unpaid']);
            $table->string('paid',50);
            $table->unsignedDecimal('amount');
            $table->unsignedDecimal('discount');
            $table->boolean('bill_printed');
            $table->string('type',30); // Home_Delivery, Walkin, Onsite
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
        Schema::dropIfExists('orders');
    }
}
