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

Route::get('/login', function () {
    return view('login');
});


Route::get('/inventory-list', function () {
    return view('inventory_list');
});

Route::get('/inventory-equipment', function () {
    return view('inventory_equipment');
});

Route::get('/inventory-software', function () {
    return view('inventory_software');
});

Route::get('/input-equipment', function () {
    return view('input_equipment');
});

Route::get('/input-project', function () {
    return view('input_project');
});



Route::get('/navbar', function () {
    return view('partials/navbar');
});


Route::get('/', function () {
    return view('welcome');
});
