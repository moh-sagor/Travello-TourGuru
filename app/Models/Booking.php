<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'taka',
        'payment_method',
        'phone_number',
        'person',
        'user_id',
        'status',
        'trxID',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
