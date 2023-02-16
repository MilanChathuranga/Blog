<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Contents;
use App\Http\Middleware\CheckStatus;
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
Auth::routes();
///* User Routes */
//
//
//Route::post('/post/create', [User\PostController::class, 'store_post'])->name('store_post');
//Route::get('/post/create', [User\PostController::class, 'create_post'])->name('create_post');
//Route::post('/post/edit/{post_id}', [User\PostController::class, 'update_post'])->name('update_post');
Route::get('/blog-details/{post_id}', [Contents\BlogDetailsController::class, 'edit_post'])->name('edit_post');
Route::get('/blog-details/{post_id}', [Contents\BlogDetailsController::class, 'delete_post'])->name('delete_post');
Route::get('/blog-details/{post_id}', [Contents\BlogDetailsController::class, 'active_post'])->name('active_post');
Route::get('/blog-details/{post_id}', [Contents\BlogDetailsController::class, 'single_view'])->name('single_view');


/*Template Routes*/
Route::get('/blog_list', [Contents\BlogController::class, 'index'])->name('blog_list');
Route::post('/blog-details', [Contents\BlogDetailsController::class, 'inline'])->name('inline');


Route::get('/', [Contents\HomeController::class, 'index'])->name('home');
Route::get('/faq', [Contents\FAQController::class, 'index'])->name('faq');
Route::get('/about', [Contents\AboutController::class, 'index'])->name('about');
Route::get('/career', [Contents\CareerController::class, 'index'])->name('career');
Route::get('/pricing', [Contents\PricingController::class, 'index'])->name('pricing');
Route::get('/portfolio', [Contents\PageController::class, 'index'])->name('portfolio');
Route::get('/contact_us', [Contents\ContactUsController::class, 'index'])->name('contact_us');
Route::get('/blog-details', [Contents\BlogDetailsController::class, 'index'])->name('blog-details');
Route::get('/portfolio-details', [Contents\PortfolioDetailsController::class, 'index'])->name('portfolio-details');

Route::get('/blog', [Contents\BlogController::class, 'index'])->name('blog');
//Route::post('/blog', [Contents\BlogController::class, 'comment'])->name('comment');

Route::middleware([CheckStatus::class])->group(function () {
    Route::post('/blog', [Contents\BlogDetailsController::class, 'comment'])->name('comment');
});
