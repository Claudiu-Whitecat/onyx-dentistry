<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;
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
    return view('oldHomepage');
})->name('homepage');
Route::post('/homepage', [ContactFormController::class, 'submit'])->name('contact.submit');;
Route::get('/success', function () {
    return view('success');
})->name('success');
Route::group(['prefix'=> 'doctori'], function (){
    Route::get('/', function(){
        return view('doctors.index');
    });
    Route::get('/template', function() {
        return view('doctors.template');
    });
});
//Route::group(['prefix'=> 'servicii'], function (){
//    Route::get('/', function(){
//        return view('services.index');
//    });
//    Route::get('/template', function() {
//        return view('services.template');
//    });
//});

Route::resource( 'preturi', PriceController::class)
    ->only(['index', 'show']);

Route::resource( 'servicii', ServiceController::class);

Route::resource('blog', BlogController::class);
