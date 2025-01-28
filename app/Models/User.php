<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $keyType = 'string'; // UUID sebagai primary key
    public $incrementing = false; // Non-incrementing karena menggunakan UUID

    
    protected $fillable = [
        'id_user',
        'username',
        'password',
        'role',
        'last_active',
        'deleted_at',
    ];

    protected $dates = ['deleted_at']; // Pastikan deleted_at di-convert sebagai Carbon instance

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'last_active' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public $timestamps = true;

    /**
     * Relasi dengan model Tracking
     * Menunjukkan bahwa seorang User bisa memiliki banyak aktivitas Tracking
     */
    public function trackings()
    {
        return $this->hasMany(Tracking::class, 'id_user', 'id_user');
    }
}
