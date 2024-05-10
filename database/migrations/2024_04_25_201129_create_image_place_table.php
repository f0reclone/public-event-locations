<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('image_place', function (Blueprint $table) {
            // Table image_place {
            //  image_id integer [ref: > images.id]
            //  place_id integer [ref: > places.id]
            //
            //  Indexes {
            //    (image_id, place_id) [unique]
            //    place_id
            //  }
            //}
            $table->foreignId('image_id')->constrained();
            $table->foreignId('place_id')->constrained();
            $table->unique(['image_id', 'place_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_place');
    }
};
