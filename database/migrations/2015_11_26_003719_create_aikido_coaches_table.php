<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAikidoCoachesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('aikido_coaches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coach_first_name');
            $table->string('coach_last_name');
            $table->string('coach_img_url')->nullable();
            $table->string('coach_title')->nullable();
            $table->integer('coach_level')->nullable();
            $table->integer('coach_club_id');
            $table->text('coach_cv')->nullable();
            $table->text('coach_note')->nullable();
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
        Schema::drop('aikido_coaches');
    }
}
