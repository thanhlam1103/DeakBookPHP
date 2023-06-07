<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index');

Route::get('/trangchu', 'HomeController@index');
Route::get('/lienhe', 'ContactController@index');

Route::get('/Giohang', 'giohangController@giohang_page');
Route::get('/admin/layout', 'AdminControlle@login_layout');
Route::get('/login', 'loginController@login_page');
Route::get('/admin/loginhome', 'AdminControlle@admin_login');

Route::get('/admin/register', 'DangkyController@register_page');
Route::get('/admin/gioithieu', 'GioithieuController@gioithieu_page');
Route::get('/add_category_product', 'CategoryProductController@add_category_product');
Route::get('/all_category_product', 'CategoryProductController@all_category_product');
Route::get('/SachKinhTe-KiNang', 'SachktController@Sachkt_page');
Route::get('/Lap-Ke-Hoach-Kinh-Doanh-Hieu-Qua', 'LapKTKDController@LapKTKD_page');
Route::get('/Ma-bun-luu-manh-va-nhung-cau-chuyen-khac-cua-nguyen-tri', 'MaBLMVNCCController@MaBLMVNCC_page');
Route::get('/Sachmoituyenchon', 'XemtatcaController@Xemtatca_page');
?>