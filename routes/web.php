<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Dashboard
Route::get('/ecommerce-dashboard', function () {
    return view('pages.ecommerce-dashboard', ['type_menu' => 'dashboard']);
});

Route::get('/general-dashboard', function () {
    return view('pages.general-dashboard', ['type_menu' => 'dashboard']);
});

// Layout
Route::get('/default-layout', function () {
    return view('pages.default-layout', ['type_menu' => 'layout']);
});

// Blank Page
Route::get('/blank-page', function () {
    return view('pages.blank-page', ['type_menu' => '']);
});

// Bootstrap
Route::get('/alert', function () {
    return view('pages.alert', ['type_menu' => 'bootstrap']);
});
Route::get('/badge', function () {
    return view('pages.badge', ['type_menu' => 'bootstrap']);
});
