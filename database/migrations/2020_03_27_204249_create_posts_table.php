<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_owner')->unsigned();
            $table->bigInteger('id_finder')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('post_owner_name');
            $table->string('post_owner_lastname');
            $table->string('post_owner_address');
            $table->string('post_owner_email')->unique();
            $table->string('phone');
            $table->string('type_of_object');
            $table->foreign('id_owner')->references('id')->on('owner');
            $table->foreign('id_finder')->references('id')->on('finder');
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
        Schema::dropIfExists('posts');
    }
}
