<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBuku extends Model
{
    use HasFactory;

    protected $table ='jenis_buku'

    public $timestamps = false;

    protected $fillable = ['jenis'];

}
