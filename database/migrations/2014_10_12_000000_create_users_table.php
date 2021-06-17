<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('user_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('placement_id')->nullable();
            $table->string('sign_up_plan')->nullable();
            $table->string('user_sponser_id')->nullable();
            $table->string('states')->nullable();
            $table->string('street_address')->nullable();
            $table->string('sponser_id')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('position')->nullable();
            $table->string('e_pin')->nullable();
            $table->string('city')->nullable();
            $table->string('pay')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('password');
            $table->string('login_status');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
