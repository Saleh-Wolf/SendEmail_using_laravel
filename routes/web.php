<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTestEmail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email', function () {
    $ms='You must be the change you wish to see in the world. - Mahatma Gandhi';
    Mail::to('salehfarid1997@gmail.com')->send(new SendTestEmail($ms));
    return 'Email sent successfully!';
});

