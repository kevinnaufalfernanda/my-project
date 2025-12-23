<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/projects/figma', function () {
    return view('projects-figma');
});

Route::get('/projects/laravel', function () {
    return view('projects-laravel');
});

Route::get('/projects/tailwind', function () {
    return view('projects-tailwind');
});

Route::get('/projects/react', function () {
    return view('projects-react');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
