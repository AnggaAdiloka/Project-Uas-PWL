<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'userdetail_id', 'car_id', 'date_start', 'date_end', 'date_due', 'total', 'note', 'status'
    ];

    public function userDetail()
    {
        return $this->belongsTo(UserDetail::class, 'userdetail_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}

