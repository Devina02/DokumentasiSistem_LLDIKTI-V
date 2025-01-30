<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tautan extends Model
{
    use HasFactory;

    protected $table = 'tautan';
    protected $primaryKey = 'id_link';
    protected $fillable = ['nama_link', 'link', 'id_project','id_link'];

    public $timestamps = true;
    // Relasi dengan tabel Project
    public function project()
    {
        return $this->belongsTo(Project::class, 'id_project', 'id_project');
    }

    // Relasi dengan tabel Tracking
    public function aktivitas()
    {
        return $this->hasMany(aktivitas::class, 'id_link', 'id_link');
    }
}
