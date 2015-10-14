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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/zip_codes', function () {
    return \App\ZipCode::all();
});

function getCreate()
{
	return view('add_zip_codes');
}

Route::get('/zip_codes','ZipController@index'); 


//Route::get('/zip_codes', function () {
//$ZipCode = \App\ZipCode::where('city','=','AGUADA')->get();
 //$ZipCode = \App\ZipCode::where('zip','>',606)->get(); //select * from ZipCode where zip > 606
//return $ZipCode;
//$ZipCode = \App\ZipCode::all();
    //return view ('zip_codes',['zip_codes'=>$ZipCode]);

//});