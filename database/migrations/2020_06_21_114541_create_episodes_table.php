<?php

use App\Models\V1\Episode;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('series_id');
            $table->string('title');
            $table->text('description');
            $table->double('duration');
            $table->string('show_day');
            $table->string('show_hour');
            $table->string('thumbnail')->default('episode.jpeg');
            $table->string('video')->default('video.jpg');
            $table->string('status')->default(Episode::STATUS_ACTIVE);
            $table->timestamps();
            
            $table->index('status');
            $table->index('created_at');

            $table->foreign('series_id')->references('id')->on('serieses');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
