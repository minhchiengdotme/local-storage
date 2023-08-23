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
        Schema::create('shelves', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false)->default('');
            $table->string('slug', 255)->index()->unique()->nullable(false)->default('');
            $table->string('description', 255)->nullable()->default('');
            $table->string('qrcode', 255)->index()->unique()->nullable(false)->default('');
            $table->string('barcode', 255)->index()->unique()->nullable(false)->default('');
            $table->string('cupboard_id', 10)->nullable(false)->default('0');
            $table->string('create_account_id', 10)->nullable(false)->default('0');
            $table->string('lastup_account_id', 10)->nullable(false)->default('0');
            $table->boolean('disabled')->nullable(false)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shelves');
    }
};
