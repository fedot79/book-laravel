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

Route::resource('/','IndexController',[
                                        'only' =>['index'],
                                        'names' =>[
                                            'index'=>'home'
                                        ]
                                       ]);

Route::resource('books','BooksController');

Route::get('books/cat/{cat_id?}',['uses' => 'BooksController@index','as' => 'booksCat']);


/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
