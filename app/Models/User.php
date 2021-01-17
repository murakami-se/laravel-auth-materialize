<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; // if use email verify, delete
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;    // if use email verify, add
// use Illuminate\Auth\MustVerifyEmail; // if use email verify, add

class User extends Authenticatable // if use email verify, delete
// class User extends Authenticatable implements MustVerifyEmailContract    // if use email verify, add
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
