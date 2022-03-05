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

//登録画面を表示
Route::get('/create',[KakeiboController::class, 'showCreate'])->name('create');

//登録処理へ
Route::post('/store',[KakeiboController::class, 'exeStore'])->name('store');

//計上結果画面へ
Route::get('/result',[KakeiboController::class, 'showResult'])->name('result');
