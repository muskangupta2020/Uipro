<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_type')->nullable();
            $table->string('plan_name')->nullable();
            $table->string('joining_fee')->nullable();
            $table->string('gst_tax')->nullable();
            $table->string('direct_referral_comission')->nullable();
            $table->string('sponsor_matching_commission')->nullable();
            $table->string('first_pair')->nullable();
            $table->string('second_pair')->nullable();
            $table->string('firstpair_matching_commission')->nullable();
            $table->string('secondpair_matching_commission')->nullable();
            $table->string('capping_period_weekly')->nullable();
            $table->string('weak_leg')->nullable();
            $table->string('capping_period_limit')->nullable();
            $table->string('sponsor_pair_matching')->nullable();
            $table->string('configure_commission')->nullable();
            $table->string('select_product_purchase_commission')->nullable();
            $table->string('level_1')->nullable();
            $table->string('level_2')->nullable();
            $table->string('level_3')->nullable();
            $table->string('level_4')->nullable();
            $table->string('level_5')->nullable();
            $table->string('level_6')->nullable();
            $table->string('level_7')->nullable();
            $table->string('level_8')->nullable();
            $table->string('level_9')->nullable();
            $table->string('level_10')->nullable();
            $table->string('level_11')->nullable();
            $table->string('level_12')->nullable();
            $table->string('level_13')->nullable();
            $table->string('level_14')->nullable();
            $table->string('level_15')->nullable();
            $table->string('level_completion_income')->nullable();
            $table->string('show_plan')->nullable();
            $table->string('invoice')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('manage_plans');
    }
}
