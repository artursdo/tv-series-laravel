<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->integer('maze_id');
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('language')->nullable();
            $table->string('status')->nullable();
            $table->integer('runtime')->nullable();
            $table->date('premiered')->nullable();
            $table->text('officialSite')->nullable();
            $table->decimal('rating', 3, 2)->nullable();
            $table->string('imdb_id')->nullable();
            $table->text('summary')->nullable();

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
        Schema::dropIfExists('shows');
    }
}
