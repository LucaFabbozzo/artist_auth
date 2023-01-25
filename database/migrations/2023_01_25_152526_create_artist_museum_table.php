<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_museum', function (Blueprint $table) {
            $table->unsignedBigInteger('museum_id');
            $table->foreign('museum_id')
                ->references('id')
                ->on('museums')
                ->cascadeOnDelete();

            $table->unsignedBigInteger('artist_id');
            $table->foreign('artist_id')
                ->references('id')
                ->on('artists')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_museum');
    }
};
