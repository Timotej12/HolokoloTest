<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NameDay extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'date',
        'search_name'
    ];

    public function profile(){

    }

//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
}
