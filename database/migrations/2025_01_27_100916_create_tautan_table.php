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
        Schema::create('tautan', function (Blueprint $table) {
            $table->increments('id_link');
            $table->timestamps();
            $table->unsignedInteger('id_project'); 
            $table->string('link', 255);
            $table->string('nama_link', 255);
            
            // Menambahkan foreign key
            $table->foreign('id_project')->references('id_project')->on('project')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tautan');
    }
};
