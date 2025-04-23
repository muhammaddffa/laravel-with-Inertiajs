<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', [UserController::class, 'index'])->name('user');
Route::get('/users/add', [UserController::class, 'add']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/upload-file', [FileController::class, 'viewFormUploud']);
Route::post('/upload-file', [FileController::class, 'store']);


// Route::get('/users', function () {
//     sleep(2);
//     // return Inertia::render('User/all');
//     $user = [
//         'name' => 'ichi',
//         'age' => 20
//     ];
//     return inertia('User/all', [
//         'user' => $user
//     ]);
// });

// Shorthand
// Route::inertia('/users', 'User/all');