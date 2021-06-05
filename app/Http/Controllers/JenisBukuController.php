<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class JenisBukuController extends Controller
{
    public function index()
    {
        $jenisbuku = DB::table('buku')
        ->select('.*')
        ->get();

    return view('jenisbuku', ['jenisbuku' => $jenisbuku]);
    }
}