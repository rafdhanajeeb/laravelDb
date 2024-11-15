<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/booking', function () {
    return view('booking');
});

