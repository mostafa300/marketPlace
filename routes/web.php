<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/','HomeController@showHome');
//showProducts
Route::get('/products','HomeController@showProducts_prand');
//showProducts post by serche
Route::post('/findproduct','HomeController@findProduct');

//showProducts
Route::get('/categories','HomeController@showProducts_prand');

//details Products
Route::get('/products/{id}','HomeController@post_details');
// this is for testing
Route::get('/test','HomeController@test');

//terms show
Route::get('/Terms_of_use','HomeController@showTermsForUs');
//terms show showb2b
Route::get('/how_to_buy','HomeController@showHowToBuy');
// showb2b
Route::get('/b2b_orders','HomeController@showb2b');




// all careers 
Route::get('/careers','CareersRequirementController@show');
// careers deatails 
Route::get('/careers/{id}','CareersRequirementController@show_details');
//submit for applay to job 
Route::post('/careers/applay','Voyager\VoyagerBaseController@store');
//show about 
Route::get('/about','HomeController@show_about');
//show_contact
Route::get('/contact','HomeController@show_contact');
//submit for applay contact
Route::post('/contact/applay','HomeController@post_contact');