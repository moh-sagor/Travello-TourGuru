<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'package_name',
        'amount',
        'phone_number',
        'trxID',
        'payment_type',
        'status',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
