<?php

namespace App\Http\Controllers;

use App\Murid;
use App\Kelas;
use App\Jurusan;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murid = Murid::all();
        return view('murid.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        return view('murid.create', compact('jurusan', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Murid::create($request->all());
        return redirect('/murid');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function show(Murid $murid)
    {
        return view('murid.show', compact('murid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function edit(Murid $murid)
    {
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        return view('murid.edit', compact('murid', 'kelas', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Murid $murid)
    {
        Murid::where('id_murid', $murid->id_murid)
        ->update([
            'id_murid' => $request->id_murid,
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas_id' => $request->kelas_id,
            'jurusan_id' => $request->jurusan_id
        ]);
        return redirect('/murid');
        // return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Murid $murid)
    {
        Murid::destroy($murid->id_murid);
        return redirect('/murid');
    }
}
