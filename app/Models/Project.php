<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'project';
    protected $primaryKey = 'id_project';
    protected $fillable = ['judul', 'project_type'];

    // Relasi dengan tabel Dokumen
    public function dokument()
    {
        return $this->hasMany(Dokument::class, 'id_project', 'id_project');
    }

    // Relasi dengan tabel Link
    public function tautan()
    {
        return $this->hasMany(Tautan::class, 'id_project', 'id_project');
    }
}
