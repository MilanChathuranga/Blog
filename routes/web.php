<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Contents;

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
//Route::post('/post/inline', [User\PostController::class, 'inline'])->name('inline');
//Route::post('/post/create', [User\PostController::class, 'store_post'])->name('store_post');
//Route::get('/post/create', [User\PostController::class, 'create_post'])->name('create_post');
//Route::get('/post/edit/{post_id}', [User\PostController::class, 'edit_post'])->name('edit_post');
//Route::post('/post/edit/{post_id}', [User\PostController::class, 'update_post'])->name('update_post');
//Route::get('/post/remove/{post_id}', [User\PostController::class, 'delete_post'])->name('delete_post');
//Route::get('/post/active/{post_id}', [User\PostController::class, 'active_post'])->name('active_post');
//Route::get('/post/single_view/{post_id}', [User\PostController::class, 'single_view'])->name('single_view');


/*Template Routes*/
Route::get('/', [Contents\HomeController::class, 'index'])->name('home');
Route::get('/faq', [Contents\FAQController::class, 'index'])->name('faq');
Route::get('/blog', [Contents\BlogController::class, 'index'])->name('blog');
Route::get('/about', [Contents\AboutController::class, 'index'])->name('about');
Route::get('/career', [Contents\CareerController::class, 'index'])->name('career');
Route::get('/pricing', [Contents\PricingController::class, 'index'])->name('pricing');
Route::get('/portfolio', [Contents\PageController::class, 'index'])->name('portfolio');
Route::get('/contact_us', [Contents\ContactUsController::class, 'index'])->name('contact_us');
Route::get('/blog-details', [Contents\BlogDetailsController::class, 'index'])->name('blog-details');
Route::get('/portfolio-details', [Contents\PortfolioDetailsController::class, 'index'])->name('portfolio-details');


