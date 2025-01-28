<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_aktivitas';
    protected $fillable = ['id_user', 'id_doc', 'id_link', 'aksi', 'timestamp'];

    public $timestamps = true;

    // Relasi dengan tabel User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    // Relasi dengan tabel Dokumen
    public function dokument()
    {
        return $this->belongsTo(Dokument::class, 'id_doc', 'id_doc');
    }

    // Relasi dengan tabel Link
    public function tautan()
    {
        return $this->belongsTo(Tautan::class, 'id_link', 'id_link');
    }
}
