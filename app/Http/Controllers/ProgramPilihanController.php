<?php

namespace App\Http\Controllers;

use App\Models\ProgramPilihan;
use Illuminate\Http\Request;

class ProgramPilihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProgramPilihan::orderBy('id_programpilihan', 'desc')->get()
            ->map(function($program) {
                return [
                    'id' => $program->id_programpilihan,
                    'pilihanprogram' => $program->pilihanprogram,
                    'biayaprogram'   => $program->biayaprogram,
                ];
            });
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pilihanprogram' => ['required', 'string'],
            'biayaprogram'   => ['required', 'integer'],
        ]);

        $programPilihan = ProgramPilihan::create([
            'pilihanprogram' => $request->pilihanprogram,
            'biayaprogram'   => $request->biayaprogram,
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
        return ProgramPilihan::find($id);
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
    public function destroy(ProgramPilihan $programPilihan)
    {
        $programPilihan->delete();

        return response(null, 204);
    }
}
