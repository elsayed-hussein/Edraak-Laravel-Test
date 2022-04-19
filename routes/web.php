<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    echo "welcome !";
});
Route::get('/test/{id}', [testController::class, 'showTest']);
Route::get('/posts', [testController::class, 'getPosts']);
Route::get('/addPost', [testController::class, 'addPost']);
