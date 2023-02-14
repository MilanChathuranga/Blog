<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Temp;

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


//Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
//
//Auth::routes();
///* User Routes */
//
//Route::get('/home', [User\HomeController::class, 'index'])->name('home');
//
//Route::get('/post/create', [User\PostController::class, 'create_post'])->name('create_post');
//Route::post('/post/create', [User\PostController::class, 'store_post'])->name('store_post');
//Route::get('/post/single_view/{post_id}', [User\PostController::class, 'single_view'])->name('single_view');
//Route::get('/post/remove/{post_id}', [User\PostController::class, 'delete_post'])->name('delete_post');
//Route::get('/post/active/{post_id}', [User\PostController::class, 'active_post'])->name('active_post');
//Route::get('/post/edit/{post_id}', [User\PostController::class, 'edit_post'])->name('edit_post');
//Route::post('/post/edit/{post_id}', [User\PostController::class, 'update_post'])->name('update_post');
//Route::post('/post/inline', [User\PostController::class, 'inline'])->name('inline');


/*Template Routes*/
Route::get('/', [Temp\HomeController::class, 'index'])->name('home');
Route::get('/about', [Temp\AboutController::class, 'index'])->name('about');
Route::get('/blog', [Temp\BlogController::class, 'index'])->name('blog');
Route::get('/portfolio', [Temp\PageController::class, 'index'])->name('portfolio');
Route::get('/pricing', [Temp\PricingController::class, 'index'])->name('pricing');


