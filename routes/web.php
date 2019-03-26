<?php
session_start();
if (!isset($_COOKIE['PHPSESSID'])) {
	setcookie("PHPSESSID",session()->getId(),99999999999);
        $_COOKIE['PHPSESSID'] = session()->getId();
}
// use DB;
use App\Trafic;
use App\Param;
use App\User;
       

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
	$cekTrafic = Trafic::select('trafic.*')->where('unique_id',$_COOKIE['PHPSESSID'])->count();
	
	if ($cekTrafic == 0) {
		if (!empty(@$_GET['ref'])) {
			$cekEmail = User::select('users.*')->where('email',Param::hexDecode(@$_GET['ref']))->get();
			Trafic::where('#')->insert(array('id_member' => $cekEmail[0]->id, 'unique_id' => $_COOKIE['PHPSESSID'],'tanggal' => date("Y-m-d"),'id_artikel' =>''));
		}else{
			Trafic::where('#')->insert(array('id_member' => '0', 'unique_id' => $_COOKIE['PHPSESSID'],'tanggal' => date("Y-m-d"),'id_artikel' =>''));
		}
		
	}else{
		$cekTraficData = Trafic::select('trafic.*')->where('unique_id',$_COOKIE['PHPSESSID'])->get();
		if (!empty(@$_GET['ref']) && $cekTraficData[0]->id_member == 0) {
			$cekEmail = User::select('users.*')->where('email',Param::hexDecode(@$_GET['ref']))->get();
			// $traficUpdate = App\Trafic::where('unique_id', session()->getId())->first();
			Trafic::where('unique_id', $_COOKIE['PHPSESSID'])->update(['id_member' => $cekEmail[0]->id]);
			// $traficUpdate->id_member = $cekEmail[0]->id;
			// $traficUpdate->save();
		}else{

		}
	}
	
    return  view("content.home");
});

Route::get('/artikel/{id}', 'ArtikelController@index')->name('artikel');
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/checkout', 'ProductController@checkout')->name('checkout');
Route::get('/checkoutSuccess', 'ProductController@checkoutSuccess')->name('checkoutSuccess');
Route::post('/checkout/store', 'ProductController@store')->name('checkoutStore');
Route::get('/product/{id}', 'ProductController@show')->name('product');
Route::get('/addTocart/{id}', 'ProductController@addTocart')->name('addTocart');
Route::get('/delDataCart/{id}', 'ProductController@delDataCart')->name('delDataCart');
Route::get('/cart', 'ProductController@cart')->name('cart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
