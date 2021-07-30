<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKYCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_y_c_s', function (Blueprint $table) {
            $table->interger('id');
            $table->string('user_id');  
            $table->string('status');
            $table->string('pan_no');
            $table->string('bank_account_no');
            $table->string('bank_ifsc');
            $table->string('pan_image');
            $table->string('cheque_leaf');
             $table->string('bank_name');
              $table->string('bank_branch');
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
        Schema::dropIfExists('k_y_c_s');
    }
}
