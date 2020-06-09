<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/names', function () {
    $names = ["Francesca", "Chiara", "Davide", "Giovanni"];
    return view('welcome', compact('names'));
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/numbers', function () {
    $number = 99;
    return view('numbers', compact('number'));
});
