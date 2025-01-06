<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;


    protected $primaryKey = 'id_link';
    protected $fillable = ['project_id', 'link'];

    // Relasi dengan tabel Project
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id_project');
    }

    // Relasi dengan tabel Tracking
    public function trackings()
    {
        return $this->hasMany(Tracking::class, 'id_link', 'id_link');
    }
}
