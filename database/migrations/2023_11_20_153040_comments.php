<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("comments",function(Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->text("text");
            $table->integer("blog_id");
            $table->boolean("accepted")->default(0);        
            $table->string("send_date");
            $table->foreign("blog_id")->references("id")->on("blogs");
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
