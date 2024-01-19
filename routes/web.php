<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route:get('/','HomeController@showWelcome');

Route::get('/', function () {
    return view('welcome');
});

Route::get('Hello', function() {
    return 'Hello World!';
});
Route::get('Hello/Direction', function(){
    return 'Directions goes here.';
});
Route::any('submit-form', function() {
    return 'Submit Form';
});
Route::get('Hello/{theSubject}', function($theSubject){
    return $theSubject. 'Content goes here.';
});
Route::get('Hello/classes/{theSubject}', function ($theSubject) {
    return " Content on $theSubject ";
});
Route::get('Hello/classes/{theArt}/{thePrice}' ,function ($theArt, $thePrice){
    return " Content on $theArt and $thePrice";
});
Route::get('about/direction', function() {
    return "Hello World";
}) ->name ('direction');

Route::get('where', function() {
    return Redirect::route('direction');
});

