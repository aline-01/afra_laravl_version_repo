<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("blogs",function(Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("content");
            $table->string("picture");
            $table->string("qute")->default("not_set");
            $table->string("category")->default("not_set");
            $table->integer("writer");
            $table->string("send_time");
            $table->foreign("writer")->references("id")->on("admins");            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
