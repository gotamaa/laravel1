<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' , ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Me']);
});
route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});
route::get('/addpost', function () {
    return view('addpost', ['title' => 'Add a Post']);
});

