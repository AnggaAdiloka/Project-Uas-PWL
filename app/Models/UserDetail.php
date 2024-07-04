<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details'; // Pastikan ini sesuai dengan nama tabel Anda

    protected $fillable = [
        'name', 'nik', 'notelp', 'alamat' // Sesuaikan dengan kolom yang ada di tabel
    ];

    // Relasi ke User jika diperlukan
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}