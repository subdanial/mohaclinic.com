<?php

use App\Http\Controllers\StaticsController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['prefix' => 'admin'], function () {
    Route::Post('/upload','UploadController@upload')->name('upload');
    Route::get('/', 'AdminController@index');
});


Route::group(['prefix' => 'admin/statics'], function () {
    Route::get('/', 'AdminController@index')->name('admin.statics.index');
    Route::get('/update', 'StaticsController@update')->name('admin.statics.update');
    
});

Route::group(['prefix' => 'admin/gallery'], function () {
    Route::get('/', 'GalleryController@edit')->name('admin.gallery.edit');
    Route::get('/edit_item/{gallery}', 'GalleryController@edit_item')->name('admin.gallery.edit_item');
    Route::get('/store', 'GalleryController@store')->name('admin.gallery.store');
    Route::get('/update/{gallery}', 'GalleryController@update')->name('admin.gallery.update');
    Route::get('/table', 'GalleryController@table')->name('admin.gallery.table');
    Route::get('/destroy/{gallery}', 'GalleryController@destroy')->name('admin.gallery.destroy');
});

Route::group(['prefix' => 'admin/teammate'], function () {
    Route::get('/', 'TeammateController@index')->name('admin.teammate.index');
    Route::get('/table', 'TeammateController@table')->name('admin.teammate.table');
    Route::get('/store', 'TeammateController@store')->name('admin.teammate.store');
    Route::get('/edit/{teammate}', 'TeammateController@edit')->name('admin.teammate.edit');
    Route::get('/update/{teammate}', 'TeammateController@update')->name('admin.teammate.update');
    Route::get('/destroy/{teammate}', 'TeammateController@destroy')->name('admin.teammate.destroy');
});

Route::group(['prefix' => 'admin/about'], function () {
    Route::get('/', 'AboutController@edit')->name('admin.about.edit');
    Route::get('/update', 'AboutController@update')->name('admin.about.update');
    Route::get('/restart', 'AboutController@restart')->name('admin.about.restart');
});
Route::group(['prefix' => 'admin/contact'], function () {
    Route::get('/', 'ContactController@edit')->name('admin.contact.edit');
    Route::get('/update', 'ContactController@update')->name('admin.contact.update');
});
Route::group(['prefix' => 'admin/about'], function () {
    Route::get('/', 'AboutController@edit')->name('admin.about.edit');
    Route::get('/update', 'AboutController@update')->name('admin.about.update');
    Route::get('/restart', 'AboutController@restart')->name('admin.about.restart');
});


Route::group(['prefix' => 'admin/category'], function () {
    Route::get('/', 'CategoryController@index')->name('admin.category.index');
    Route::get('/table', 'CategoryController@table')->name('admin.category.table');
    Route::get('/update', 'CategoryController@update')->name('admin.category.update');
    Route::get('/store', 'CategoryController@store')->name('admin.category.store');
    Route::get('/destroy{category}', 'CategoryController@destroy')->name('admin.category.destroy');
});


Route::group(['prefix' => 'admin/post'], function () {
    Route::get('/', 'PostController@index')->name('admin.post.index');
    Route::get('/table', 'PostController@table')->name('admin.post.table');
    Route::get('/create', 'PostController@create')->name('admin.post.create');
    Route::post('/store', 'PostController@store')->name('admin.post.store');
    Route::get('/edit/{post}', 'PostController@edit')->name('admin.post.edit');
    Route::post('/update/{post}', 'PostController@update')->name('admin.post.update');
   
    Route::get('/destroy{post}', 'PostController@destroy')->name('admin.post.destroy');
});



Route::get('/', 'HomeController@home')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/gallery', 'HomeController@gallery')->name('gallery.index');
Route::get('/teammate', 'HomeController@teammate')->name('teammate.index');
Route::get('/about', 'HomeController@about')->name('about.index');
Route::get('/contact', 'HomeController@contact')->name('contact.index');
Route::get('/blog', 'HomeController@blog')->name('blog.index');
Route::get('/blog/post/{post}', 'PostController@show')->name('post.show');
