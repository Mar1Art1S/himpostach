<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


Route::controller(MainController::class)->group(function () {
    Route::view('/', 'main')->name('main');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'index')->name('article.index');

    Route::get('/blog/{category}', 'category')->name('article.category');
    Route::get('/blog/{category}/{article}', 'show')->name('article.show');
    Route::get('/blog/tag/{tag}', 'tag')->name('article.tag');
});
