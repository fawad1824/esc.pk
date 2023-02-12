<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Website Pages
Route::get('/', function () {
    return view('users.home');
});
Route::get('/about', function () {
    $title = "About us";
    return view('users.about', compact('title'));
});
Route::get('/contracts', function () {

    $title = "Contract Catalog";
    return view('users.contract', compact('title'));
});
Route::get('/contractors', function () {

    $title = "Register Contractors";
    return view('users.contractors', compact('title'));
});
Route::get('/contact', function () {

    $title = "Contac Us";
    return view('users.contact', compact('title'));
});


// Admin Panel Pages
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
