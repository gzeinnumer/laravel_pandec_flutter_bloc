<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\API\UsersController;

Route::prefix('users')->group(function () {
    Route::post('/insert', [UsersController::class, 'insert'])->name('users.insert');
    Route::get('/all', [UsersController::class, 'all'])->name('users.all');
    Route::get('/paging', [UsersController::class, 'paging'])->name('users.paging');
    Route::post('/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('/find/{id}', [UsersController::class, 'find'])->name('users.find');
    Route::get('/delete/{id}', [UsersController::class, 'delete'])->name('users.delete');
});
