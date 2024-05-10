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
        Schema::create('places', function (Blueprint $table) {
            // create table with following schema Table places {
            //  id integer [primary key]
            //  name varchar
            //  place_category_id integer [ref: > place_categories.id]
            //  coordinates Point
            //  created_at timestamp
            //  updated_at timestamp
            //
            //  Indexes {
            //    place_category_id
            //  }
            //}
            $table->id();
            $table->string('name');
            $table->foreignId('place_category_id')->constrained();
            $table->geography('coordinates', 'point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
