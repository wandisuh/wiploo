<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->string('email')->nullable();
            $table->integer('category_id');
            $table->string('image')->nullable();
            $table->text('short_content')->nullable();
            $table->text('content');
			$table->string('slug');
            $table->integer('published')->default('0');
            $table->integer('featured')->default('0');
            $table->integer('popular')->default('0');
			$table->integer('shared')->default('0');
            $table->integer('rating')->default('0');
            $table->integer('liked')->default('0');
            $table->integer('approved')->default('0');
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
        Schema::dropIfExists('articles');
    }
}
