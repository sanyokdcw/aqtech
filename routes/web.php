<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\Article;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/setlocale/{locale}', [MainController::class, 'setlocale']);
Route::get('/services', [MainController::class, 'services']);
Route::get('/houses', [MainController::class, 'houses']);
Route::get('/business', [MainController::class, 'business']);
Route::get('/contacts', [MainController::class, 'contacts']);
Route::post('/request', [MainController::class, 'request']);
Route::get('/page/{id}', [MainController::class, 'thomas_shelby']);

Route::get('/about', function() {
return view('about');
});

Route::get('/articles', function() {
$locale = session('locale');
App::setLocale($locale);
$articles = Article::all();
return view('articles', compact('articles'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
