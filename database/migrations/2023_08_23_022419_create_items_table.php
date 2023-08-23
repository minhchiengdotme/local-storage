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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->index()->nullable(false)->default('');
            $table->string('slug',255)->index()->nullable(false)->default('');
            $table->date('buy_date')->nullable(false)->default('0000:00:00');
            $table->date('expire_date')->nullable(false)->default('0000:00:00');
            $table->text('buy_store')->nullable(false)->default('');
            $table->text('buy_note')->nullable(false)->default('');
            $table->text('description')->nullable(false)->default('');
            $table->string('thumbnail',255)->index()->nullable(false)->default('');
            $table->string('barcode', 255)->nullable(false)->default('');
            $table->string('qrcode', 255)->nullable(false)->default('');
            $table->string('shelve_id', 10)->nullable(false)->default('0');
            $table->string('sku', 255)->index()->unique()->nullable(false)->default('');
            $table->integer('create_account_id')->nullable(false)->default('0');
            $table->integer('lastup_account_id')->nullable(false)->default('0');
            $table->boolean('disabled')->nullable(false)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
