<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')
        ->select('.*')
        ->get();

    return view('buku', ['buku' => $buku]);
    }
}