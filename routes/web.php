<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
    //
});
Route::post('/pdf/read', [PDFController::class, 'readPDF']);
