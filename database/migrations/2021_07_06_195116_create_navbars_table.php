<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('logo_image');
            $table->string('contact');
            $table->string('offer1')->nullable();
            $table->string('offer2')->nullable();
            $table->string('offer3')->nullable();
            $table->string('offer4')->nullable();
            $table->string('offer5')->nullable();
            $table->string('offer6')->nullable();
            $table->string('offer7')->nullable();
            $table->string('offer8')->nullable();
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
        Schema::dropIfExists('navbars');
    }
}
