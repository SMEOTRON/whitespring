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

Route::get('/controller',[
  "uses"=>'UserController@index'
]);
Route::resource('my','UserController');

Route::get('/register',function(){
return view('register',['name'=>'NITHEESH']);
});

Route::post('/user/register',[
  "uses"=>'UserRegistration@postRegister'
]);

Route::get('json',function(){
   return response()->json(['name' => 'NITHEESH', 'state' => 'Gujarat']);
});

Route::get('blade', function () {
   return view('page',array('name' => 'NITHEESH'));
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');

Route::get('students','StudInsertController@fetchUsers');
Route::get('/students/{id}','studentController@fetchStudent');


Route::get('/validation','ValidationControlle@showform');
Route::post('/validation','ValidationControlle@validateform');

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('/error',function(){
   return view('404');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/login',function(){
  return view('login');
});

//product creation and retrivel routes/
 Route::get('/products','ProductController@products');
 Route::get('/products/{id}','ProductController@singleProduct');

 Route::get('/product/new','ProductController@createProductForm');
 Route::post('/create/product','ProductController@createProduct');

 Route::get('/delete/product/{id}','ProductController@deleteProduct');
