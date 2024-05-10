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
        Schema::create('custom_place_attributes', function (Blueprint $table) {
            $table->id();
            // Table custom_place_attributes {
            //  id integer [primary key]
            //  place_id integer [ref: > places.id]
            //  attribute_group_id integer [ref: > attribute_groups.id]
            //  value JSON
            //  created_at timestamp
            //  updated_at timestamp
            //
            //  Indexes {
            //    (place_id, attribute_group_id) [unique]
            //    attribute_group_id
            //  }
            //}
            $table->foreignId('place_id')->constrained();
            $table->foreignId('attribute_group_id')->constrained();
            $table->json('value');
            $table->unique(['place_id', 'attribute_group_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_place_attributes');
    }
};
