<?php

use App\Http\Controllers\ProjectController;
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

Route::get('/', function () {
    return view('home',[
        'title' => 'HomePage'
    ]);
});

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/items', [ItemController::class, 'index']);



// ### ========== Testing Static Views ============ ###
Route::get('/static-login', function () {
    return view('login');
});
Route::get('/static-inventory-list', function () {
    return view('inventory_list');
});
Route::get('/static-inventory-equipment', function () {
    return view('inventory_equipment');
});
Route::get('/static-inventory-software', function () {
    return view('inventory_software');
});
Route::get('/static-input-equipment', function () {
    return view('input_equipment');
});
Route::get('/static-input-project', function () {
    return view('input_project');
});
Route::get('/static-navbar', function () {
    return view('partials/navbar');
});



// Route::get('/', function () {
//     return view('welcome');
// });
