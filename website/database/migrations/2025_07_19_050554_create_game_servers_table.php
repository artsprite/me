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
        Schema::create('game_servers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('game_type')->comment('minecraft, roblox, etc.');
            $table->string('server_address');
            $table->integer('port')->nullable();
            $table->enum('status', ['online', 'offline', 'maintenance'])->default('offline');
            $table->integer('current_players')->default(0);
            $table->integer('max_players')->default(0);
            $table->string('version')->nullable();
            $table->text('description')->nullable();
            $table->string('server_type')->nullable()->comment('survival, creative, etc.');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_check')->nullable();
            $table->json('server_info')->nullable()->comment('Additional server information');
            $table->timestamps();
            
            $table->index(['status', 'is_active']);
            $table->index(['game_type', 'is_featured']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_servers');
    }
};
