<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_doc';
    protected $fillable = ['id_project', 'document'];

    // Relasi dengan tabel Project
    public function project()
    {
        return $this->belongsTo(Project::class, 'id_project', 'id_project');
    }

    // Relasi dengan tabel Tracking
    public function trackings()
    {
        return $this->hasMany(Tracking::class, 'id_doc', 'id_doc');
    }
}
