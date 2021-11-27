<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
            $table->string('title');
            $table->text('body');
            $table->string('category');
            $table->string('city');
            $table->string('link_join');
            $table->string('start_at');
            $table->string('start_date');
            $table->string('end_at');
            $table->string('end_date');
            $table->string('image');
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
        Schema::dropIfExists('events');
    }
}
