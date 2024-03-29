<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group([
    'prefix' => 'profile',
    'as' => 'profile.',
    'namespace' => 'App\Http\Controllers\Auth',
    'middleware' => ['auth']
], function () {
    Route::get('password', 'ChangePasswordController@edit')
        ->name('password.edit');
    Route::post('password', 'ChangePasswordController@update')
        ->name('password.update');
    Route::post('profile', 'ChangePasswordController@updateProfile')
        ->name('password.updateProfile');
});
