<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Queue;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/emails', function () {
    return Queue::all();
})->name('emails.list');

Route::post('/emails', 'EmailController@store')->name('emails.store');
