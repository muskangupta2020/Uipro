<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('states');
            $table->string('zipcode');
            $table->string('payment_mode')->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('discount')->nullable();
            $table->string('shipping_cost')->nullable();
            $table->string('total');
            $table->string('coupan_discount')->nullable();
            $table->string('subtotal');
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
        Schema::dropIfExists('checkouts');
    }
}
