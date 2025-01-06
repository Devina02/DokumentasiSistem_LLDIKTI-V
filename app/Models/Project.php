<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_project';
    protected $fillable = ['judul', 'project_type'];

    // Relasi dengan tabel Dokumen
    public function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'id_project', 'id_project');
    }

    // Relasi dengan tabel Link
    public function links()
    {
        return $this->hasMany(Link::class, 'project_id', 'id_project');
    }
}
