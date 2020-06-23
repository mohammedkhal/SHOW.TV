<?php

use App\Http\Middleware\Auth;
use GuzzleHttp\Middleware;
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

/**
 * Authintication page and registriation
 */
Route::group(['prefix' => 'auth', 'namespace' => 'V1\Auth'], function () {

    Route::get('/sign-up', 'SignUpController@create')->name('auth.sign-up');
    Route::post('/sign-up', 'SignUpController@store')->name('auth.sign-up.store');

    Route::get('/sign-in', 'SignInController@create')->name('auth.sign-in');
    Route::post('/sign-in', 'SignInController@auth')->name('auth.sign-in.auth');

    Route::get('/sign-out', 'SignOutController@signOut')->name('auth.sign-out');
});

Route::group(['prefix' => 'series', 'namespace' => 'V1\Series', 'middleware' => 'check'], function () {
    Route::get('', 'IndexController@index')->name('series.index');
    Route::post('', 'CreateController@store')->name('series.store');
    Route::get('/{serise_id}', 'IndexController@show')->name('serieses.serise.show');
    Route::put('/{serise_id}', 'EditController@update')->name('serieses.serise.update');
    Route::delete('/{serise_id}', 'EditController@destroy')->name('serieses.serise.delete');
});

Route::group(['prefix' => 'episode', 'namespace' => 'V1\Episode', 'middleware' => 'check'], function () {
    Route::get('', 'IndexController@index')->name('episode.index');
    Route::post('', 'CreateController@store')->name('episode.store');
    Route::get('/{episode_id}', 'IndexController@show')->name('episodes.episode.show');
    Route::put('/{episode_id}', 'EditController@update')->name('episodes.episode.update');
    Route::delete('/{episode_id}', 'EditController@destroy')->name('episodes.episode.delete');
});
Route::get('/home', function () {
    return view('welcome');
});
