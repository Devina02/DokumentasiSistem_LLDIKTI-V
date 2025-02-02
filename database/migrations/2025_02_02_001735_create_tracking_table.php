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
        Schema::create('tracking', function (Blueprint $table) {
            $table->increments('id_tracking');
            // Kolom untuk menghubungkan ke user yang melakukan aksi (menggunakan uuid sesuai migration users)
            $table->uuid('id_user');
            // Kolom untuk mencatat jenis aksi yang dilakukan
            // Contoh: 'lihat_link', 'lihat_dokumen', 'download_dokumen'
            $table->string('aksi', 50);
            // Kolom tambahan untuk menyimpan informasi terkait dokumen/link (opsional)
            // Misalnya, nama file atau link yang diklik
            $table->string('detail', 255)->nullable();
            // Waktu aktivitas dibuat
            $table->timestamp('created_at')->useCurrent();

            // Menambahkan foreign key ke tabel users
            $table->foreign('id_user')
                  ->references('id_user')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking');
    }
};
