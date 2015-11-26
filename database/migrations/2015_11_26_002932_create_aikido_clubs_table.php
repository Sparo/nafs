<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAikidoClubsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('aikido_clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('club_name');
            $table->string('club_logo_url')->nullable();
            $table->string('club_url')->nullable();
            $table->string('club_fb_url')->nullable();
            $table->string('club_email')->nullable();
            $table->string('club_phone')->nullable();
            $table->string('club_address')->nullable();
            $table->string('club_lat')->nullable();
            $table->string('club_lon')->nullable();
            $table->text('club_note')->nullable();
            $table->integer('club_coach_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('aikido_clubs');
    }
}
