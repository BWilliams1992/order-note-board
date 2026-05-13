<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::post('/api/notes', [ NoteController::class, 'store']);
