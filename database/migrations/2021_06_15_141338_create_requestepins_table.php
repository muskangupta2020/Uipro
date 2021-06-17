<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestepinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestepins', function (Blueprint $table) {
            $table->id();
            $table->string('epin_id');
            $table->string('epin_amount');
            $table->string('sign_up_plan');
            $table->string('user_name');
            $table->string('sponser_id');
            $table->string('epin_status');
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
        Schema::dropIfExists('requestepins');
    }
}
