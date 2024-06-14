<?php

use App\Http\Controllers\BlogController;
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
Route::view('/barbed-wire', 'visitors.barbed')->name('barbed-wire');
Route::view('/chain-link-fencing', 'visitors.chainlink')->name('chain-link-fencing');
Route::view('/further-drawn-wire', 'visitors.furtherdrawn')->name('further-drawn-wire');
Route::view('/gi-welded-wire-mesh', 'visitors.welded')->name('gi-welded-wire-mesh');
Route::view('/hot-dip-galvnized-wire', 'visitors.galvnized')->name('hot-dip-galvnized-wire');
Route::view('/hb-wire', 'visitors.hbwire')->name('hb-wire');
Route::view('/ms-welded-wire-mesh', 'visitors.mswire')->name('ms-welded-wire-mesh');
Route::view('/nail-wire', 'visitors.nailwire')->name('nail-wire');
Route::view('/commercial-gi-wire', 'visitors.commercialwire')->name('commercial-gi-wire');
Route::view('/redraw-wire', 'visitors.redraw')->name('redraw-wire');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::post('form-action', [EnquiryController::class, 'store'])->name('formaction');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
