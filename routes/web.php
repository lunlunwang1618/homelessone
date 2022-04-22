<?php

use App\Http\Controllers\AppleController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    echo 'Hello World!';
});

// Route::get('/sample', function (): void {
//     echo "Sample Controller Message";
// });
Route::get('/sample', [AppleController::class, 'show']);
Route::put('/sample', [AppleController::class, 'index']);

Route::get('/cookie', [CookieController::class, 'index']);
###cookie的網頁無法顯示，需要註解一行###
