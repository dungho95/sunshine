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

Route::get('/', function () {
    return view('welcome');
});
/*
use App\Loai;
Route::get('/danhsachloai',function(){
    //Eloquent Model de lay du lieu
    $ds_loai = Loai::all(); // SELECT * FROM loai
    $json = json_encode($ds_loai);
    return $json;
});

use App\ChuDe;
Route::get('/danhsachchude',function(){
    //Eloquent Model de lay du lieu
    //$ds_chude = ChuDe::all(); // SELECT * FROM chude
   $ds_chude = DB:: table('chude')->get(); 
   $json = json_encode($ds_chude);
    return $json;
});

use App\SanPham;
Route::get('/danhsachsanpham',function(){
    //Eloquent Model de lay du lieu
    $ds_sanpham = SanPham::all(); // SELECT * FROM chude
    $json = json_encode($ds_sanpham);
    return $json;
});
*/
// tencontroller@action
Route::get('/admin/danhsachloai','LoaiController@index')->name('danhsachloai.index');
Route::get('/danhsachchude','ChuDeController@index');