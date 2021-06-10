<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'User';
   
    protected $fillable = ['nama', 'username', 'password'];
    
    public $timestamps = false;
 
    protected $hidden = 'password';

}
