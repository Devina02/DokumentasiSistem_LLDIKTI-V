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
        Schema::create('dokument', function (Blueprint $table) {
            $table->increments('id_doc');
            $table->timestamps();
            $table->unsignedInteger('id_project');
            $table->string('nama_dokumen', 255); // Nama dokumen
            $table->string('dokumen'); // Path atau nama file yang disimpan

            // Menambahkan foreign key untuk relasi dengan tabel 'project'
            $table->foreign('id_project')->references('id_project')->on('project')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokument');
    }
};
