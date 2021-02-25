<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Grades\GradeController;
use App\Http\Controllers\Classrooms\ClassroomController;
use App\Http\Controllers\Sections\SectionController;

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

Route::group(['middleware' => ['guest']], function () {

    Route::get('/', function () {
        return view('auth.login');
    });

});



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , 'auth']
    ], function(){

    //==============================dashboard============================
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');

   //==============================Grades============================
    Route::resource('Grades', GradeController::class);

    //==============================Classrooms============================
    Route::resource('Classrooms', ClassroomController::class);
    Route::post('delete_all', 'App\Http\Controllers\Classrooms\ClassroomController@delete_all')->name('delete_all');

    Route::post('Filter_Classes', 'App\Http\Controllers\Classrooms\ClassroomController@Filter_Classes')->name('Filter_Classes');


   //==============================Classrooms============================
    Route::resource('Sections', SectionController::class);

    Route::get('/classes/{id}', 'App\Http\Controllers\Sections\SectionController@getclasses');


    //==============================parents============================

    Route::view('add_parent','livewire.show_Form');

});




