<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakBuku extends Model
{
    use HasFactory;

    protected $table ='rakbuku';

    public $timestamps = false;

    protected $fillable = ['id_buku', 'id_jenis_buku'];
}
