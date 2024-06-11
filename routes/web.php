<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;

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
    return view('visitors.index');
})->name('home');
Route::view('/redraw', 'visitors.redrawwire')->name('redraw');
Route::view('/company', 'visitors.company')->name('company');
Route::view('/contact', 'visitors.contact')->name('contact');
Route::view('/distributor', 'visitors.distributor')->name('distributor');
Route::post('form-action', [EnquiryController::class, 'store'])->name('formaction');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

