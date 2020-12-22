<?php
/**
 * Controller Kelas
 * @author Muhammad Riziq Susanto
 * @filesource Kelas.php
 * @filesource Jurusan.php
 * @version 1.0
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Jurusan;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('kelas.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kelas::create($request->all());
        return redirect('/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($kelas)
    {
        $kelas = Kelas::findOrFail($kelas);
        return view('kelas.show', compact('kelas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($kelas)
    {
        $jurusan = Jurusan::all();
        $kelas = Kelas::findOrFail($kelas);
        // dd($jurusan, $kelas);
        return view('kelas.edit', compact('kelas', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kelas)
    {
        // Kelas::where('id_kelas', $kelas->id_kelas)
        // ->update([
        //     'id_kelas' => $request->id_kelas,
        //     'nama_kelas' => $request->nama_kelas,
        //     'jurusan_id' => $request->id_jurusan
        // ]);
        $kelas = Kelas::findOrFail($kelas);
        $kelas->update($request->all());
        return redirect('/kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($kelas)
    {
        Kelas::destroy($kelas);
        return redirect('/kelas');
    }
}
