<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});