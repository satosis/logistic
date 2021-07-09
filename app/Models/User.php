<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    protected $guarded =[''];
    protected $fillable = [
        'id', 'name', 'provider', 'provider_id', 'email', 'phone', 'address', 'password', 'avatar', 'remember_token', 'created_at', 'updated_at'
    ];
}
