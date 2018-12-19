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
})->name('home');

Route::resource('test','TestController');
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
Route::get('/admin/danhsachloai/print', 'LoaiController@print')->name('danhsachloai.print');
// Route::get('admin/danhsachloai','LoaiController@index')->name('danhsachloai.index');
// Route::get('admin/danhsachloai/create','LoaiController@create')->name('danhsachloai.create');
// Route::post('admin/danhsachloai/create','LoaiController@store')->name('danhsachloai.store');
// Route::get('admin/danhsachloai/{id}','LoaiController@edit')->name('danhsachloai.edit');
// Route::put('admin/danhsachloai/{id}','LoaiController@update')->name('danhsachloai.update');
// Route::delete('admin/danhsachloai/{id}','LoaiController@destroy')->name('danhsachloai.destroy');
Route::resource('admin/danhsachloai','LoaiController');


Route::get('/admin/danhsachsanpham/excel', 'SanPhamController@excel')->name('danhsachsanpham.excel');
Route::get('/admin/danhsachsanpham/pdf', 'SanPhamController@pdf')->name('danhsachsanpham.pdf');
Route::get('/admin/danhsachsanpham/print', 'SanPhamController@print')->name('danhsachsanpham.print');
Route::resource('admin/danhsachsanpham','SanPhamController');

Route::get('/', 'FrontendController@index')->name('frontend.home');
Route::get('/gioi-thieu', 'FrontendController@about')->name('frontend.about');
Route::get('/lien-he', 'FrontendController@contact')->name('frontend.contact');
Route::post('/lien-he/goi-loi-nhan', 'FrontendController@sendMailContactForm')->name('frontend.contact.sendMailContactForm');
Route::get('/san-pham', 'FrontendController@product')->name('frontend.product');
Route::get('/san-pham/{id}', 'FrontendController@productDetail')->name('frontend.productDetail');
Route::get('/gio-hang', 'FrontendController@cart')->name('frontend.cart');
Route::post('/dat-hang', 'FrontendController@order')->name('frontend.order');
Route::get('/dat-hang/hoan-tat', 'FrontendController@orderFinish')->name('frontend.orderFinish');
