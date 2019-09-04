<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('communities', function (Blueprint $table) {
          $table->Increments('id');
          $table->integer('user_id');
          $table->string('permalink');
          $table->string('eyecatch_path')->nullable();
          $table->string('name');
          $table->string('pref');
          $table->text('information')->nullable();
          $table->string('image1_path')->nullable();
          $table->string('image2_path')->nullable();
          $table->string('image3_path')->nullable();
          $table->string('video1_link')->nullable();
          $table->string('video2_link')->nullable();
          $table->string('video3_link')->nullable();
          $table->text('calendar')->nullable();
          $table->string('message_image_path')->nullable();
          $table->text('message')->nullable();
          $table->string('contact')->nullable();
          $table->string('facebook_link')->nullable();
          $table->string('instagram_link')->nullable();
          $table->string('twitter_link')->nullable();
          $table->string('website_link')->nullable();
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
        Schema::dropIfExists('communities');
    }
}
