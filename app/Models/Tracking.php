<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;
    protected $table = 'tracking';

    // Karena kita tidak memakai kolom updated_at, kita non-aktifkan timestamp otomatis
    public $timestamps = false;

    // Kolom-kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'id_user',
        'aksi',
        'detail'
    ];

    /**
     * Relasi ke model User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

}
