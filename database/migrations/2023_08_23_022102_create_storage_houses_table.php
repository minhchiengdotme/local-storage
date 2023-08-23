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
        Schema::create('storage_houses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 255)->allowNull(true)->default('null');
            $table->string('slug', 255)->unique()->allowNull(true)->default('');
            $table->string('description', 255)->allowNull(true)->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storage_houses');
    }
};
