<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedTinyInteger('is_active');
            $table->string('title')->nullable(true);
            $table->text('description')->nullable(true);
            $table->dateTime('deleted_at')->nullable(true);
            $table->unsignedBigInteger('deleted_by')->nullable(true);
            $table->unsignedBigInteger('user_id');
            $table->foreign('deleted_by')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('galleries');
    }
}
