<?php

use App\Route;

Route::get('/', 'SiteController@index');
Route::get('/admin/login', 'SiteController@login');
Route::get('/admin/registration', 'SiteController@registration');
Route::get('/admin/logout', 'UserController@logout');
Route::get('/admin/personalAccount', 'SiteController@personalAccount');
Route::get('/admin/changeData', 'SiteController@changeData');
Route::get('/admin/createNews', 'SiteController@createNews');
Route::get('/', 'NewsController@readNews');

Route::post('/admin/registration', 'SiteController@registration');
Route::post('/admin/registration', 'UserController@registration');

Route::post('/admin/login', 'SiteController@login');
Route::post('/admin/login', 'UserController@login');

Route::post('/admin/changeData', 'SiteController@changeData');
Route::post('/admin/changeData', 'UserController@changeData');

Route::post('/admin/createNews', 'SiteController@createNews');
Route::post('/admin/createNews', 'NewsController@createNews');



if (!in_array($_SERVER['REQUEST_URI'], Route::$routes)){
    echo '<img src="/images/404.jpg" width="100%" height="100%">';
}
