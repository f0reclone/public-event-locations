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
        Schema::create('place_user', function (Blueprint $table) {
    // Table place_user {
            //  place_id integer [ref: > places.id]
            //  user_id integer [ref: > users.id]
            //  role enum("host", "editor")
            //
            //  Indexes {
            //    (place_id, user_id) [unique]
            //    user_id
            //  }
            //}
            $table->foreignId('place_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->enum('role', ['host', 'editor']);
            $table->unique(['place_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_user');
    }
};
