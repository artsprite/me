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
        Schema::create('server_status', function (Blueprint $table) {
            $table->id();
            $table->string('server_name');
            $table->string('server_type', 100);
            $table->enum('status', ['online', 'offline', 'maintenance'])->default('offline');
            $table->timestamp('last_check')->useCurrent();
            $table->integer('response_time')->nullable();
            $table->integer('player_count')->default(0);
            $table->integer('max_players')->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->index('server_name');
            $table->index('status');
            $table->index('last_check');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_status');
    }
};
