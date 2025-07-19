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
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin', 'therapist', 'user'])->default('user')->after('email');
            $table->string('phone')->nullable()->after('role');
            $table->text('bio')->nullable()->after('phone');
            $table->string('avatar')->nullable()->after('bio');
            $table->foreignId('assigned_therapist_id')->nullable()->constrained('users')->after('avatar');
            $table->boolean('is_therapist')->default(false)->after('assigned_therapist_id');
            $table->json('preferences')->nullable()->after('is_therapist');
            $table->timestamp('last_login_at')->nullable()->after('preferences');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['assigned_therapist_id']);
            $table->dropColumn([
                'role',
                'phone',
                'bio',
                'avatar',
                'assigned_therapist_id',
                'is_therapist',
                'preferences',
                'last_login_at'
            ]);
        });
    }
};
