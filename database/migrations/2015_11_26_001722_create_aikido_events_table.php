<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAikidoEventsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('aikido_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_title');
            $table->string('event_img_url')->nullable();
            $table->string('event_url')->nullable();
            $table->string('event_address');
            $table->timestamp('event_start_time');
            $table->timestamp('event_end_time');
            $table->string('event_lat')->nullable();
            $table->string('event_lon')->nullable();
            $table->text('event_description')->nullable();
            $table->text('event_note')->nullable();
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
        Schema::drop('aikido_events');
    }
}
