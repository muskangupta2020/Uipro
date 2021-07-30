<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvanceSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advance_settings', function (Blueprint $table) {
            $table->id();
            $table->string('reward')->nullable();
            $table->string('coupon')->nullable();
            $table->string('product_service')->nullable();
            $table->string('ecommerce_store')->nullable();
            $table->string('franchisee')->nullable();
            $table->string('repurchase')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->string('sms_notification')->nullable();
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
        Schema::dropIfExists('advance_settings');
    }
}
