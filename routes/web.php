<?php

use App\Http\Controllers\Kakeibo\CreateKakeiboController;
use App\Http\Controllers\Kakeibo\HomeKakeiboController;
use App\Http\Controllers\Kakeibo\ShowKakeiboController;
use App\Http\Controllers\Kakeibo\StoreKakeiboController;
use Illuminate\Support\Facades\Route;

//ホーム画面を表示
Route::get('/', HomeKakeiboController::class)->name('home');

//登録画面を表示
Route::get('/create', CreateKakeiboController::class)->name('create');

//登録処理へ
Route::post('/store', StoreKakeiboController::class)->name('store');

//計上結果画面へ
Route::get('/result', ShowKakeiboController::class)->name('result');
