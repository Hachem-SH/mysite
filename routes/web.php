<?php

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

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('home');
Route::get('movie/watch/{movie_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewmovie']);
Route::get('movie/details/{movie_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewmoviedetails']);

Route::get('series', [App\Http\Controllers\Frontend\FrontendController::class, 'series']);
Route::get('movies', [App\Http\Controllers\Frontend\FrontendController::class, 'movies']);

Route::get('serie/details/{serie_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewseriedetails']);
Route::get('serie/details/{serie_slug}/season/{season}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewserieseasonsdetails']);
Route::get('serie/details/{serie_slug}/season/{season}/episode/{ep}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewserie']);



Route::group(['middleware' => ['auth','is_admin']], function () {


    Route::get('dashboard', [App\Http\Controllers\Admin\FrontendController::class, 'index']);

    Route::get('dashboard/movies', [App\Http\Controllers\Admin\MoviesController::class, 'index'])->name('movies');
    Route::get('dashboard/movies/add', [App\Http\Controllers\Admin\MoviesController::class, 'add']);
    Route::post('movie-added', [App\Http\Controllers\Admin\MoviesController::class, 'insert'])->name('movie-added');
    Route::get('dashboard/movies/edit/{id}', [App\Http\Controllers\Admin\MoviesController::class, 'edit']);
    Route::put('movie-edited/{id}', [App\Http\Controllers\Admin\MoviesController::class, 'update']);
    Route::get('delete-movie/{id}', [App\Http\Controllers\Admin\MoviesController::class, 'destroy']);


    Route::get('dashboard/series', [App\Http\Controllers\Admin\SeriesController::class, 'index'])->name('series');
    Route::get('dashboard/series/add', [App\Http\Controllers\Admin\SeriesController::class, 'add']);
    Route::post('serie-added', [App\Http\Controllers\Admin\SeriesController::class, 'insert'])->name('serie-added');
    Route::get('dashboard/series/edit/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'edit']);
    Route::put('serie-edited/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'update']);
    Route::get('delete-serie/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'destroy']);



    Route::get('dashboard/series/seasons/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'seasons_index'])->name('seasons');
    Route::get('dashboard/series/seasons/add/{serie_id}', [App\Http\Controllers\Admin\SeriesController::class, 'seasons_add']);
    Route::post('serie-season-added', [App\Http\Controllers\Admin\SeriesController::class, 'seasons_insert'])->name('serie-season-added');

    Route::get('dashboard/series/seasons/edit/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'seasons_edit']);
    Route::put('season-edited/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'seasons_update']);

    Route::get('delete-season/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'seasons_destroy']);




    Route::get('dashboard/series/seasons/episodes/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'episodes_index'])->name('episodes');
    Route::get('dashboard/series/seasons/episodes/add/{season_id}', [App\Http\Controllers\Admin\SeriesController::class, 'episodes_add']);
    Route::post('serie-episode-added', [App\Http\Controllers\Admin\SeriesController::class, 'episodes_insert'])->name('serie-episode-added');
    Route::get('dashboard/series/seasons/episodes/edit/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'episodes_edit']);
    Route::put('serie-episodes-edited/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'episodes_update']);

    Route::get('delete-serie-episode/{id}', [App\Http\Controllers\Admin\SeriesController::class, 'episodes_destroy']);







});

Auth::routes();


