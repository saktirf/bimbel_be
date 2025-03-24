<?php

use App\Http\Controllers\ProgramPilihanController;
use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])
    ->group(function() {
        Route::get('/user', function(Request $request) {
            return $request->user();
        });

        Route::apiResource('/program-pilihan', ProgramPilihanController::class);
        Route::post('/program-pilihan/add', [ProgramPilihanController::class, 'store']);
        Route::get('/program-pilihan/edit/{id}', [ProgramPilihanController::class, 'edit']);
        Route::post('/program-pilihan/edit/{id}', [ProgramPilihanController::class, 'update']);

        Route::apiResource('/siswa', SiswaController::class);
        Route::post('/siswa/add', [SiswaController::class, 'store']);
        Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
        Route::post('/siswa/edit/{id}', [SiswaController::class, 'update']);
    });
