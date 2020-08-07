<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TimelineController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('gallery');
})->name('/');

// Route::get('/gallery', 'ImageController@getAllPathImages')->name('gallery-page');
Route::get('/gallery', function() {
    
})->name('gallery-page');

Route::get('/about', function () {
    return view('about');
})->name('about-page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact-page');

Auth::routes();

Route::get('/upload', function() {
    return view('upload');
})->name('upload-page');

Route::get('/timeline', 'TimelineController@getTimeline')->name('timeline-page');
Route::get('/timeline', 'TimelineController@getTimeline')->name('timeline-page');

Route::post('/send-form', 'ContactController@sendForm')->name('send-form-contact');

/*Новости и картинки в админ панеле*/
Route::get('/admin-panel', 'AdminController@getAll')->name('admin-panel');
Route::get('/admin/add/new', function() { return view('admin.addNews'); })->name('add-new-page');
Route::get('/admin/add/img', function() { return view('admin.addImg'); })->name('add-img-page');
Route::post('/admin/add/new', 'AdminController@addNews')->name('add-new');
Route::post('/admin/add/img', 'AdminController@addImg')->name('add-img');

// Route::get('/admin/delete/new/{id}', 'AdminController@deleteNews')->name('delete-news');
// Route::get('/admin/delete/img/{id}', 'AdminController@deleteImg')->name('delete-img');