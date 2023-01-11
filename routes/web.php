<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Models\Blog;

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

Route::get('/',function(){
    $bloogs = Blog::take(3)->latest()->get();
    return view('index' , compact('bloogs'));
});

Route::get('/about' , [PagesController::class, 'about']);

Route::resource('/blog' , BlogController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/contact' , [ContactController::class, 'contact']);


Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');




