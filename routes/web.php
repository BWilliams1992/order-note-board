<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ NoteController::class, 'index']);

Route::post('/api/notes', [ NoteController::class, 'store']);
