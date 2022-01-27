<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameDay extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'search_name'
    ];

//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
}
