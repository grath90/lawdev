<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//welcome page
//Route::get('/', 'StaticController@index');
Route::get('/', array('as' => 'index', 'uses' => 'StaticController@index'));

//awards page
//Route::get('awards', array('as' => 'awards', 'uses' => 'StaticController@awards'));

//location page
Route::get('location', array('as' => 'location', 'uses' => 'StaticController@location'));

//contact page
//Route::get('contact', array('as' => 'contact', 'uses' => 'StaticController@contact'));

//-----attorneys------

//lassiter
Route::get('lassiter', array('as' => 'lassiter', 'uses' => 'attorneyController@lassiter' ));

//cassinelli
Route::get('cassinelli', array('as' => 'cassinelli', 'uses' => 'attorneyController@cassinelli' ));

//collins
Route::get('collins', array('as' => 'collins', 'uses' => 'attorneyController@collins' ));