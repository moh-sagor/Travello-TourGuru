<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitemap extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'contact',
        'address',
        'facebook',
        'twitter',
        'linkedin',
        'user_id',
        'sitename',
        'about_1',
        'about_2',
        'banner_1',
        'banner_2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
