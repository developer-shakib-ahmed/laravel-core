<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\myUsersController;

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

/*
 *  show form to create a user
 */
Route::get('/user/add/', [myUsersController::class, 'create']);

/*
 *  store a new user
 */
Route::post('/user/store/', [myUsersController::class, 'store']);

/*
 *  show a signle user
 */
Route::get('/user/show/{id}', [myUsersController::class, 'show']);

/*
 *  show form to edit the user
 */
Route::get('/user/edit/{id}', [myUsersController::class, 'edit']);

/*
 *  save the edited user
 */
Route::post('/user/update/', [myUsersController::class, 'update']);

/*
 *  delete a user
 */
Route::get('/user/delete/{id}', [myUsersController::class, 'destroy']);


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::post('myuser', [myUsersController::class, 'getData']);

Route::get('/mylogin', function() {

    return view('mylogin');

});

Route::get('/my404', function(){

    return view('my404');

});

Route::get('data', [myUsersController::class, 'showData']);

