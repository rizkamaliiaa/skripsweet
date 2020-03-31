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
Auth::routes();
Route::get('/', function () {
    return view('landing');
});


Route::group(['middleware' => ['auth', 'roles']],function(){

    Route::group(['roles'=>'Admin'],function(){
        Route::get('/admin', 'AdminController@admin_home');
        Route::get('/adminn', 'AdminController@admin')->name('admin');
        Route::post('/admin/store', 'AdminController@storeadmin')->name('storeadmin');
        Route::get('/admin/edit', 'AdminController@editadmin')->name('editadmin');
        Route::put('/admin/update/{id}', 'AdminController@updateadmin')->name('updateadmin');
        Route::delete('/admin/destroy/{id}', 'AdminController@destroyadmin')->name('destroyadmin');
        Route::get('/getadmin/{id}','AdminController@getadmin')->name('getadmin');
        Route::post('/updateadmin', 'AdminController@updateadminbaru')->name('update-admin');

        Route::get('/users', function(){
            return view('admin.adminusers');    
        });        
        Route::resource('/users','AdminController');
        Route::get('/getuser/{id}','AdminController@getuser')->name('getuser');
        Route::post('/updateuser', 'AdminController@updateUser')->name('update-user');

        Route::resource('/device','DeviceController');
        Route::get('/device', 'DeviceController@index');
        Route::get('/getdevice/{id}','DeviceController@getdevice')->name('getdevice');
        Route::post('/updatedevice', 'DeviceController@updateDevice')->name('update-device');

        Route::get('/data', function () {
            return view('admin.admindata');
        });
        Route::resource('/data','UnggasController');

        Route::get('/settings', function(){ 
            return view('admin.settings');       
        });
        Route::get('password', 'SettingsController@change')->name('password.change');
        Route::post('password','SettingsController@update')->name('password.update');
    });

    Route::group(['roles'=>'User'],function(){
        Route::get('/user', 'UserController@index');        
        Route::resource('/kontrol','KontrolController');
        Route::get('/laporan', function () {
            return view('user.userlaporan');
        });
        Route::get('/setting', function () {
            return view('user.settingsuser');
        });
        Route::get('password', 'SettingsController@change')->name('password.change');
        Route::post('password','SettingsController@update')->name('password.update');
    });
});


Route::get('lihat-data', 'MonitoringsController@monitoring')->name('monitoring');
Route::get('lihat', 'ControllingController@tanggal')->name('tanggal');

Route::get('lihat/jam/{kode_alat}', 'ControllingController@jam');
