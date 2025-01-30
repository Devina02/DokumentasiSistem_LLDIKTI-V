<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokument extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'dokument';

    // Menetapkan primary key
    protected $primaryKey = 'id_doc';

    // Kolom yang dapat diisi massal
    protected $fillable = ['id_project', 'nama_dokumen', 'dokumen','id_doc'];

    public $timestamps = true;


    
    // Relasi dengan tabel Project
    public function project()
    {
        return $this->belongsTo(Project::class, 'id_project', 'id_project');
    }

    // Relasi dengan tabel Tracking
    public function aktivitas()
    {
        return $this->hasMany(aktivitas::class, 'id_doc', 'id_doc');
    }
}
