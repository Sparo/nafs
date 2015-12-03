<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAikidoAboutTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('aikido_about', function (Blueprint $table) {
            $table->increments('id');
            $table->string('about_title');
            $table->string('about_img');
            $table->string('about_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('aikido_about');
    }
}
