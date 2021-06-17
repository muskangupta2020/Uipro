<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelCompletionIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_completion_incomes', function (Blueprint $table) {
            $table->id();
            $table->string('plan_id')->nullable();
            $table->string('plan_commission')->nullable();
            $table->string('income_name')->nullable();
            $table->string('level_name')->nullable();
            $table->string('total_member')->nullable();
            $table->string('minimum_direct')->nullable();
            $table->string('earring_amount')->nullable();
            $table->string('upgrade_amount')->nullable();
            $table->string('archieve_duration')->nullable();
            $table->string('create_id')->nullable();
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
        Schema::dropIfExists('level_completion_incomes');
    }
}
