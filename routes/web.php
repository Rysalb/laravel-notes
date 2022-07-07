<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/notes', [NotesController::class, 'index']);
Route::get('/notes/create', [NotesController::class, 'create']);
Route::post('/notes', [NotesController::class, 'store']);
Route::get('/notes/{id}/edit', [NotesController::class, 'edit']);
Route::put('/notes/{id}', [NotesController::class, 'update']);
Route::delete('/notes/{id}', [NotesController::class, 'destroy']);
