<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HtmlpdfController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
// Route::get('/form', [FormController::class,"showForm"])->name('show-form');
// Route::post('/form', [FormController::class, "processForm"])->name('process-form');



Route::get("/form", [HtmlpdfController::class, "showPDF"])->name('show-pdf');
Route::post("/downloadpdf", [HtmlpdfController::class, "downloadPDF"])->name('process-form');


Route::get('/createWord', [HtmlpdfController::class, "createWordDocx"])->name('createWord');
// });