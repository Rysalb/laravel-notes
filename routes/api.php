<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NotesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/notes', [NotesController::class, 'index']);
// Route::get('/notes/create', [NotesController::class, 'create']);
Route::post('/notes', [NotesController::class, 'store']);
// Route::get('/notes/{id}/edit', [NotesController::class, 'edit']);
Route::get('/notes/{id}', [NotesController::class, 'show']);
Route::put('/notes/{id}', [NotesController::class, 'update']);
Route::delete('/notes/{id}', [NotesController::class, 'destroy']);



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
