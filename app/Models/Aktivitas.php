<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    use HasFactory;

    protected $table = 'aktivitas'; // Menentukan nama tabel

    protected $fillable = [
        'id_user',
        'id_doc',
        'id_link',
        'aksi',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    // Relasi ke Dokumen
    public function dokument()
    {
        return $this->belongsTo(Dokument::class, 'id_doc', 'id');
    }

    // Relasi ke Link
    public function tautan()
    {
        return $this->belongsTo(tautan::class, 'id_link', 'id');
    }
}
