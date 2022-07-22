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
Route::get('/breadcrumb', function () {
    return view('pages.breadcrumb', ['type_menu' => 'bootstrap']);
});
Route::get('/buttons', function () {
    return view('pages.buttons', ['type_menu' => 'bootstrap']);
});
Route::get('/card', function () {
    return view('pages.card', ['type_menu' => 'bootstrap']);
});
Route::get('/carousel', function () {
    return view('pages.carousel', ['type_menu' => 'bootstrap']);
});
Route::get('/collapse', function () {
    return view('pages.collapse', ['type_menu' => 'bootstrap']);
});
Route::get('/dropdown', function () {
    return view('pages.dropdown', ['type_menu' => 'bootstrap']);
});
Route::get('/form', function () {
    return view('pages.form', ['type_menu' => 'bootstrap']);
});
Route::get('/list-group', function () {
    return view('pages.list-group', ['type_menu' => 'bootstrap']);
});
Route::get('/media-object', function () {
    return view('pages.media-object', ['type_menu' => 'bootstrap']);
});
Route::get('/modal', function () {
    return view('pages.modal', ['type_menu' => 'bootstrap']);
});
Route::get('/nav', function () {
    return view('pages.nav', ['type_menu' => 'bootstrap']);
});
Route::get('/navbar', function () {
    return view('pages.navbar', ['type_menu' => 'bootstrap']);
});
Route::get('/pagination', function () {
    return view('pages.pagination', ['type_menu' => 'bootstrap']);
});
Route::get('/popover', function () {
    return view('pages.popover', ['type_menu' => 'bootstrap']);
});
Route::get('/progress', function () {
    return view('pages.progress', ['type_menu' => 'bootstrap']);
});
Route::get('/table', function () {
    return view('pages.table', ['type_menu' => 'bootstrap']);
});
Route::get('/tooltip', function () {
    return view('pages.tooltip', ['type_menu' => 'bootstrap']);
});
Route::get('/typography', function () {
    return view('pages.typography', ['type_menu' => 'bootstrap']);
});


// components
Route::get('/components-article', function () {
    return view('pages.components-article', ['type_menu' => 'components']);
});
Route::get('/components-avatar', function () {
    return view('pages.components-avatar', ['type_menu' => 'components']);
});
Route::get('/components-chat-box', function () {
    return view('pages.components-chat-box', ['type_menu' => 'components']);
});
Route::get('/components-empty-state', function () {
    return view('pages.components-empty-state', ['type_menu' => 'components']);
});
Route::get('/components-gallery', function () {
    return view('pages.components-gallery', ['type_menu' => 'components']);
});
Route::get('/components-hero', function () {
    return view('pages.components-hero', ['type_menu' => 'components']);
});
Route::get('/components-multiple-upload', function () {
    return view('pages.components-multiple-upload', ['type_menu' => 'components']);
});
Route::get('/components-pricing', function () {
    return view('pages.components-pricing', ['type_menu' => 'components']);
});
Route::get('/components-statistic', function () {
    return view('pages.components-statistic', ['type_menu' => 'components']);
});
Route::get('/components-tab', function () {
    return view('pages.components-tab', ['type_menu' => 'components']);
});
Route::get('/components-table', function () {
    return view('pages.components-table', ['type_menu' => 'components']);
});
Route::get('/components-user', function () {
    return view('pages.components-user', ['type_menu' => 'components']);
});
Route::get('/components-wizard', function () {
    return view('pages.components-wizard', ['type_menu' => 'components']);
});
