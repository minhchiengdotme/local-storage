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
        Schema::create('cupboards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->allowNull(true)->default('null');
            $table->string('slug', 255)->unique()->allowNull(true)->default('');
            $table->string('description', 255)->allowNull(true)->default('');
            $table->string('qr_no', 255)->allowNull(false)->default('');
            $table->string('barcode_no', 255)->allowNull(false)->default('');
            $table->smallIncrements('storage_house_id', 10)->allowNull(false)->default('0');
            $table->smallIncrements('create_account_id', 10)->allowNull(false)->default('0');
            $table->smallIncrements('lastup_account_id', 10)->allowNull(false)->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupboards');
    }
};
