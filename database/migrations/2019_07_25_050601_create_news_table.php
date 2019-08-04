<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
          $table->Increments('id');
          $table->integer('user_id');
          $table->string('news_permalink');
          $table->string('news_title');
          $table->string('news_eyecatch_path')->nullable();
          $table->string('news_writer')->nullable();
          $table->text('news_body');
          $table->string('news_website_link')->nullable();
          $table->string('news_image1_path')->nullable();
          $table->string('news_image2_path')->nullable();
          $table->string('news_image3_path')->nullable();
          $table->string('news_video1_link')->nullable();
          $table->string('news_video2_link')->nullable();
          $table->string('news_video3_link')->nullable();
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
        Schema::dropIfExists('news');
    }
}
