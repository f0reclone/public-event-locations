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
        Schema::create('attribute_groups', function (Blueprint $table) {
            // create table with following schema Table attribute_groups {
            //  id integer  [primary key]
            //  name varchar
            //  is_custom bool
            //  created_at timestamp
            //  updated_at timestamp
            //}

            $table->id();
            $table->string('name');
            $table->boolean('is_custom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_groups');
    }
};
