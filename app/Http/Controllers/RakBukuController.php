<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RakBuku;

class RakBukuController extends Controller
{
    public function index(Request $request)
    {
        $rak_buku = RakBuku::when($request->cari, function ($query) use ($request) {
            $query
            ->where('id_buku', 'like', "%{$request->cari}%");
        })->paginate(5);

        $rak_buku->appends($request->only('cari'));

        return view('rak_buku.index', [
            'rak_buku' => $rak_buku,
        ])
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rak_buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_buku'              => 'required',
            'id_jenis_buku'        => 'required',
        ]);

        RakBuku::create($request->all());

        return redirect()
                ->route('rak_buku.index')
                ->with('success','RakBuku created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RakBuku $rak_buku)
    {
        return view('rak_buku.show', compact('rak_buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RakBuku $rak_buku)
    {
        return view('rak_buku.edit', compact('rak_buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RakBuku $rak_buku)
    {
        $request->validate([
            'id_buku'              => 'required',
            'id_jenis_buku'        => 'required',
        ]);

        $rak_buku->update($request->all());

        return redirect()
                ->route('rak_buku.index')
                ->with('success','RakBuku updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RakBuku $rak_buku)
    {
        $rak_buku->delete();

        return redirect()->route('rak_buku.index')
                ->with('success','RakBuku deleted successfully');
    }
}
