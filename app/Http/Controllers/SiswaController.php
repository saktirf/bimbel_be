<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Siswa::orderBy('id_siswa', 'desc')->get()
            ->map(function($siswa) {
                return [
                    'id'          => $siswa->id_siswa,
                    'nama'        => $siswa->nama,
                    'asalsekolah' => $siswa->asalsekolah,
                    'kelas'       => $siswa->kelas,
                    'jeniskelamin'=> $siswa->jeniskelamin,
                ];
            });
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'          => ['required', 'string'],
            'tempatlahir'   => ['required', 'string'],
            'tanggallahir'  => ['required'],
            'asalsekolah'   => ['required', 'string'],
            'kelas'         => ['required', 'string'],
            'jeniskelamin'  => ['string'],
            'alamat'        => ['string'],
            'nohp'          => ['string'],
            'tempat_les'    => ['required', 'string'],
            'pilihanprogram'=> ['required', 'string'],
            'tglpendaftaran'=> ['required'],
            'status_siswa'  => ['required', 'string'],
            'keterangan'    => ['string'],
        ]);

        $programPilihan = Siswa::create([
            'nama'          => $request->nama,
            'tempatlahir'   => $request->tempatlahir,
            'tanggallahir'  => $request->tanggallahir,
            'asalsekolah'   => $request->asalsekolah,
            'kelas'         => $request->kelas,
            'jeniskelamin'  => $request->jeniskelamin,
            'alamat'        => $request->alamat,
            'nohp'          => $request->nohp,
            'tempat_les'    => $request->tempat_les,
            'pilihanprogram'=> $request->pilihanprogram,
            'tglpendaftaran'=> $request->tglpendaftaran,
            'status_siswa'  => $request->status_siswa,
            'keterangan'    => $request->keterangan,
        ]);

        return response($programPilihan, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return response(null, 204);
    }
}
