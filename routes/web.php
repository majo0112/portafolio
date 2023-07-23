
<?php

use App\Http\Controllers\ContactController;
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
    return view('home');
})->name ('/'); ;

Route::get('about', function () {
    return view('about');
})->name ('about');

Route::get('portfolio', function () {
    return view('portfolio');
})->name ('portfolio');

Route::get('contact', function () {
    return view('contact');
})->name ('contact');


Route::get('/contact', [ContactController::class, 'submitForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendmail'])->name('contact.sendmail');


