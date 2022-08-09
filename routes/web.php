<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

Route::get('create-person',[PersonController::class, 'create']);
Route::post('store-person',[PersonController::class, 'store']);
Route::get('persons',[PersonController::class, 'all']);
Route::get('edit-person/{pid}',[PersonController::class, 'edit']);
Route::post('update-person/{pid}',[PersonController::class, 'update']);
Route::get('delete-person/{pid}',[PersonController::class, 'delete']);
Route::get('home',[WebsiteController::class, 'home']);
Route::get('about',[WebsiteController::class, 'about']);
Route::get('contact',[WebsiteController::class, 'contact']);
Route::get('admin-home',[AdminController::class, 'home']);
Route::get('admin-button',[AdminController::class, 'button']);
Route::get('admin-card',[AdminController::class, 'card']);
Route::get('admin-color',[AdminController::class, 'color']);
Route::get('admin-border',[AdminController::class, 'border']);
Route::get('admin-animation',[AdminController::class, 'animation']);
Route::get('admin-other',[AdminController::class, 'other']);
Route::get('admin-login',[AdminController::class, 'login']);
Route::get('admin-registration',[AdminController::class, 'registration']);
Route::get('admin-forgetPass',[AdminController::class, 'forgetPass']);
Route::get('admin-error',[AdminController::class, 'error']);
Route::get('admin-blank',[AdminController::class, 'blank']);
Route::get('admin-chart',[AdminController::class, 'chart']);
Route::get('admin-table',[AdminController::class, 'table']);