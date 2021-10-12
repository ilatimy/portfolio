<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalNoticeController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\RealisationsController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('realisations', [RealisationsController::class, 'realisations']);
Route::get('mentionslegales', [LegalNoticeController::class, 'mentions']);

Route::get('contact', [ContactController ::class, 'contact']);
Route::post('contact', [ContactController::class, 'confirm']);


Route::fallback(function() {
    return view('error/error'); // la vue error.blade.php
 });