<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epins', function (Blueprint $table) {
            $table->id();
            $table->string('epin_id');
            $table->string('epin_no');
            $table->string('epin_type');
            $table->string('generated_by');
            $table->string('epin_amount');
            $table->string('mode_of_epin');
            $table->string('epin_status');
            $table->string('user_id');
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
        Schema::dropIfExists('epins');
    }
}
