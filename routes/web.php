<?php

use App\Http\Controllers\PriceController;
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

Route::get('/', function () {
    return view('homepage');
});

Route::group(['prefix'=> 'doctors'], function (){
    Route::get('/', function(){
        return view('doctors.index');
    });
    Route::get('/template', function() {
        return view('doctors.template');
    });
});

Route::resource( 'prices', PriceController::class)
    ->only(['index', 'show']);
