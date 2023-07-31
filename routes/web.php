<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/product', function () {
    return view('services.product');
})->name('product'); 

Route::get('/pr', function () {
    return view('services.pr');
})->name('pr'); 

Route::get('/expressentry', function () {
    return view('services.expressentry');
})->name('expressentry'); 

Route::get('/pnp', function () {
    return view('services.pnp');
})->name('pnp'); 

Route::get('/prcards', function () {
    return view('services.prcards');
})->name('prcards'); 

Route::get('/family', function () {
    return view('services.family');
})->name('family'); 


Route::get('/iot', function () {
    return view('services.iot');
})->name('iot'); 

Route::get('/mobileapp', function () {
    return view('services.mobileapp');
})->name('mobileapp'); 


Route::get('/placement', function () {
    return view('services.placement');
})->name('placement'); 

Route::get('/recruitment', function () {
    return view('services.recruitment');
})->name('recruitment');

Route::get('/usa', function () {
    return view('services.usa');
})->name('usa'); 

Route::get('/canada', function () {
    return view('services.canada');
})->name('canada'); 




Route::get('/di_bi', function () {
    return view('services.dibi');
})->name('di_bi'); 

Route::get('/dw_eng', function () {
    return view('services.datawarehouse');
})->name('dw_eng'); 

Route::get('/webapp', function () {
    return view('services.webapp');
})->name('webapp'); 

Route::get('/staffing', function () {
    return view('services.staffing');
})->name('staffing');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/resume_parser', function () {
    return view('resume_parser');
})->name('resume_parser');

// Route::get('contact', function () {
//     return view('contact');
// })->name('contact');

// Route::resource('contact', [ContactController::class, 'store'])->name('contact.submit');
Route::resource('contact', ContactController::class);
// end