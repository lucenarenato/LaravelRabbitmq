<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RabbitMQController;
use App\Http\Controllers\RabbitMQNewController;
use App\Jobs\SendWelcomeEmail;

Route::get('/send', [RabbitMQController::class, 'send']);
Route::get('/consumer', [RabbitMQController::class, 'consumer']);

/** Uma versão melhorada */
Route::get('/new/send', [RabbitMQNewController::class, 'send']);
Route::get('/new/consumer/create', [RabbitMQNewController::class, 'consumerCreatePDF']);
Route::get('/new/consumer/log', [RabbitMQNewController::class, 'consumerLogPDF']);


Route::get('/', function () {
    $user = [
        'name' => 'Renato',
        'email' => 'cpdrenato@gmail.com'
    ];
    SendWelcomeEmail::dispatch($user);

});

Route::get('/high', function () {
    $user = [
        'name' => 'Renato',
        'email' => 'cpdrenato@gmail.com'
    ];
    SendWelcomeEmail::dispatch($user)->onQueue('high');

});

Route::get('/delay', function () {
    $user = [
        'name' => 'Renato',
        'email' => 'cpdrenato@gmail.com'
    ];
    SendWelcomeEmail::dispatch($user)->delay(now()->addMinutes(10));

});




