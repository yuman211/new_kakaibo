<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KakeiboController;
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

//ホーム画面を表示
Route::get('/', [KakeiboController::class, 'showHome'])->name('home');
