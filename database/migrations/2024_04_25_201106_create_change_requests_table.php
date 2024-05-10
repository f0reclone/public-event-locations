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
        Schema::create('change_requests', function (Blueprint $table) {
            // Table change_requests {
            //  id integer [primary key]
            //  user_id integer [ref: > users.id]
            //  place_id integer [ref: > places.id]
            //  contents JSON
            //  created_at timestamp
            //  updated_at timestamp
            //}
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('place_id')->constrained();
            $table->json('contents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('change_requests');
    }
};
