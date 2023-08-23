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
        Schema::create('generics', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false)->default('');
            $table->string('slug', 255)->nullable(false)->default('');
            $table->string('value', 255)->nullable(false)->default('');
            $table->text('description')->nullable(false)->default('');
            $table->boolean('disabled')->nullable(false)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generics');
    }
};
