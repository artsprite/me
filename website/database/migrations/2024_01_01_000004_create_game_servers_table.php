<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('game_servers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type'); // minecraft, roblox, etc.
            $table->string('host');
            $table->integer('port');
            $table->enum('status', ['online', 'offline', 'maintenance'])->default('offline');
            $table->integer('player_count')->default(0);
            $table->integer('max_players')->default(0);
            $table->text('description')->nullable();
            $table->string('version')->nullable();
            $table->json('server_info')->nullable(); // additional server data
            $table->timestamp('last_check')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('game_servers');
    }
}; 