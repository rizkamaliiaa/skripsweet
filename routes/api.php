<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ultrasonik/{kode}/{tinggi}', 'SensorController@ultrasonik');

// Route::get('dht/{kode}/{suhu}', 'SensorController@dht');

Route::get('ketinggian/kmin/{kode_alat}', 'ControllingController@kmin');
Route::get('ketinggian/kmax/{kode_alat}', 'ControllingController@kmax');

Route::get('jam/{jam}/{kode_alat}', 'ControllingController@jam');
Route::get('jamsekarang/{kode_alat}', 'ControllingController@jam_sekarang');

Route::get('jumlah/jumlah_unggas/{kode_alat}', 'ControllingController@jumlah_unggas');
Route::get('berat/beratpakan/{id}', 'ControllingController@berat');


