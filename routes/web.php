<?php

use App\Events\NotificationEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-notification', function () {
    event(new NotificationEvent('Hello, this is a notification!'));
});
