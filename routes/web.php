<?php

use App\Http\Controllers\ProgramPilihanController;
use App\Models\ProgramPilihan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';

// Route::resource('index', ProgramPilihanController::class);
