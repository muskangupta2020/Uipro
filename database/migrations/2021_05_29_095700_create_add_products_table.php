<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('plan_commission')->nullable();
            $table->string('parent_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('sub_category_id')->nullable();
            $table->string('selling_price')->nullable();
            $table->string('dealer_price')->nullable();
            $table->string('product_cost')->nullable();
            $table->string('avl_qty')->nullable();
            $table->string('discount')->nullable();
            $table->string('gst')->nullable();
            $table->string('product_type')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->string('display_product')->nullable();
            $table->string('description')->nullable();

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
        Schema::dropIfExists('add_products');
    }
}
