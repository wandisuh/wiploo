<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('email')->nullable();
            $table->integer('category_id');
            $table->string('file_video');
            $table->text('embed_video');
            $table->text('short_content');
            $table->text('content');
            $table->string('slug');
            $table->integer('published')->default('0');
            $table->integer('featured')->default('0');
            $table->integer('popular')->default('0');
            $table->integer('shared')->default('0');
            $table->integer('rating')->default('0');
            $table->integer('liked')->default('0');
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
        Schema::dropIfExists('videos');
    }

}
