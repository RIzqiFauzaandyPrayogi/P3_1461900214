<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RakBukuController extends Controller
{
    public function index()
    {
        $rakbuku = DB::table('buku')
        ->select('.*')
        ->get();

    return view('rakbuku', ['rakbuku' => $rakbuku]);
    }
}