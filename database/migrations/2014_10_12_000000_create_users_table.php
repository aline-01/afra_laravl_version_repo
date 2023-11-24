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
            $table->string('fl_name');
            $table->string('mobile_number')->unique();
            $table->string("corp_name");
            $table->string("side");
            $table->string("address");
            $table->string("state");
            $table->string("need_product");
            $table->string("password");
            $table->string("register_date");
            $table->string("last_login");
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
        Schema::dropIfExists("users");
    }
}
