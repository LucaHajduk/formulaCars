<?php

use App\Http\Controllers\RaceController;

Route::get('/', [RaceController::class, 'index'])->name('index');
