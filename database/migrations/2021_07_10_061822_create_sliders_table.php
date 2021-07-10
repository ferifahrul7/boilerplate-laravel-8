<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(true);
            $table->text('description')->nullable(true);
            $table->string('image')->nullable(true);
            $table->unsignedTinyInteger('is_active');
            $table->dateTime('started_at')->nullable(true);
            $table->dateTime('ended_at')->nullable(true);
            $table->dateTime('deleted_at')->nullable(true);
            $table->unsignedBigInteger('deleted_by')->nullable(true);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');
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
        Schema::dropIfExists('sliders');
    }
}
