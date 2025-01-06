<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tracking', function (Blueprint $table) {
            $table->increments('id_aktivitas');
            $table->timestamps();
            $table->uuid('id_user');
            $table->unsignedInteger('id_doc')->nullable();
            $table->unsignedInteger('id_link')->nullable();
            $table->enum('aksi', ['Lihat', 'Unduh']);
            $table->dateTime('timestamp');

            // Foreign keys
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_doc')->references('id_doc')->on('dokumen')->onDelete('cascade');
            $table->foreign('id_link')->references('id_link')->on('link')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tracking');
    }
};
