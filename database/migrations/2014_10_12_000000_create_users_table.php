<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id_user')->primary(); // Primary key
            $table->string('username', 255);
            $table->string('password', 255);
            $table->enum('role', ['superadmin', 'admin']);
            $table->datetime('last_active')->nullable(); // Waktu terakhir aktif
            $table->datetime('deleted_at')->nullable(); // Waktu soft delete
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
