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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::resource ('cort','cortSetting');

Route::get('/', 'DashboardController@adminDashBoard')->name('admin.home');

Route::get('/create-cort', 'CortSettingController@createAdalat')->name('create.cort');
Route::post('/create-cort', 'CortSettingController@storeAdalat');









Route::get('/create-zela', 'ZelaSettingController@createZela')->name('create.zelathana');
Route::post('/create-zela', 'ZelaSettingController@storeZela');

Route::get('/create-thana', 'ThanaSettingController@createThana')->name('create.zelathana');
Route::post('/create-thana', 'ThanaSettingController@storeThana');









Route::get('/create-firstSuitInfo', 'FirstSuitInfoController@createFirstSuitInfo')->name('create.firstSuitInfo');
Route::post('/create-firstSuitInfo', 'FirstSuitInfoController@storeFirstSuitInfo');

Route::get('/create-secondSuitInfo', 'SecondSuitInfoController@createSecondSuitInfo')->name('create.secondSuitInfo');
Route::post('/create-secondSuitInfo', 'SecondSuitInfoController@storeSecondSuitInfo');




Route::get('/create-login', 'LoginController@createLogin')->name('create.login');
Route::post('/create-login', 'LoginController@storeLogin');
// Route::get('/', function () {
//     return view('csrm.adminpanel.pages.zela-thana-union-setting');
// });

// Route::get('/', function () {
//     return view('csrm.adminpanel.pages.login-setting');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
