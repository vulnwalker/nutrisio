<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use DB;
use App\Trafic;
use App\Param;
use App\User;
use App\Cart;

class ProductController extends Controller
{

    public function index()
    {

      // $setCookies = "";
      // $cookieValue= md5(date("Y-m-d H:i:s"));
      // if (!isset($_COOKIE['sessionID'])) {
      //   setcookie("sessionID", $cookieValue,99999999999);
      //   $sessionIDSession = $cookieValue;
      // }else{
      //   $sessionIDSession = $_COOKIE['sessionID'];
      // }
        // $cekTrafic = Trafic::select('trafic.*')->where('unique_id',$sessionIDSession)->count();
        // $cekEmail = User::select('users.*')->where('email',Param::hexDecode(@$_GET['ref']))->get();
        // if ($cekTrafic == 0) {
        //     if (!empty(@$_GET['ref'])) {
        //
        //         DB::table('trafic')->where('#')->insert(array('id_member' => $cekEmail[0]->id, 'unique_id' => $sessionIDSession,'tanggal' => date("Y-m-d"),'id_artikel' =>''));
        //     }else{
        //         DB::table('trafic')->where('#')->insert(array('id_member' => '0', 'unique_id' => $sessionIDSession,'tanggal' => date("Y-m-d"),'id_artikel' =>''));
        //     }
        //
        // }else{
        //     $cekTraficData = Trafic::select('trafic.*')->where('unique_id',$sessionIDSession)->get();
        //     if (!empty(@$_GET['ref']) && $cekTraficData[0]->id_member == 0) {
        //         $cekEmail = User::select('users.*')->where('email',Param::hexDecode(@$_GET['ref']))->get();
        //         // $traficUpdate = App\Trafic::where('unique_id', session()->getId())->first();
        //         Trafic::where('unique_id', $sessionIDSession)->update(['id_member' => $cekEmail[0]->id]);
        //         // $traficUpdate->id_member = $cekEmail[0]->id;
        //         // $traficUpdate->save();
        //     }else{
        //
        //     }
        // }

        $products = Product::select('produk.*')->get();
        $setting = DB::table('setting')->where('nama', 'URL_GAMBAR')->get();
        return view('content.products',compact('products','setting'));
    }

    public function show($id)
    {
        $cekTrafic = Trafic::select('trafic.*')->where('unique_id',$_COOKIE['sessionID'])->count();
        $cekEmail = User::select('users.*')->where('email',Param::hexDecode(@$_GET['ref']))->get();
        if ($cekTrafic == 0) {
            if (!empty(@$_GET['ref'])) {

                DB::table('trafic')->where('#')->insert(array('id_member' => $cekEmail[0]->id, 'unique_id' => $_COOKIE['sessionID'],'tanggal' => date("Y-m-d"),'id_artikel' =>''));
            }else{
                DB::table('trafic')->where('#')->insert(array('id_member' => '0', 'unique_id' => $_COOKIE['sessionID'],'tanggal' => date("Y-m-d"),'id_artikel' =>''));
            }

        }else{
            $cekTraficData = Trafic::select('trafic.*')->where('unique_id',$_COOKIE['sessionID'])->get();
            if (!empty(@$_GET['ref'])  && $cekTraficData[0]->id_member == 0) {
                $cekEmail = User::select('users.*')->where('email',Param::hexDecode(@$_GET['ref']))->get();
                // $traficUpdate = App\Trafic::where('unique_id', session()->getId())->first();
                Trafic::where('unique_id', $_COOKIE['sessionID'])->update(['id_member' => $cekEmail[0]->id]);
                // $traficUpdate->id_member = $cekEmail[0]->id;
                // $traficUpdate->save();
            }else{

            }
        }
        $setting = DB::table('setting')->where('nama', 'URL_GAMBAR')->get();

        $product = Product::findOrFail($id);
        return view('content.product',compact('setting'))->with('product', $product);
    }

    public function  addTocart($id){
        DB::table('cart')->where('#')->insert(array('qty'=>1,'id_produk' => $id, 'session_id' => $_COOKIE['sessionID']));

        return redirect('cart');
    }

    public function cart(){
        $carts = Cart::select('cart.*','produk.harga','produk.nama_produk')->join('produk', 'produk.id', '=', 'cart.id_produk')->where('session_id' , $_COOKIE['sessionID'])->get();
        $total = Cart::select(DB::raw('SUM(produk.harga) as totalHarga'))->join('produk', 'produk.id', '=', 'cart.id_produk')->where('session_id' , $_COOKIE['sessionID'])->get();
        return view('content.cart',compact("carts","total"));
    }

    public function delDataCart($id)
    {
        Cart::where('id',$id)->where('session_id',$_COOKIE['sessionID'])->delete();
        return redirect('cart');
    }

    public function checkout()
    {
        $carts = Cart::select('cart.*','produk.harga','produk.nama_produk')->join('produk', 'produk.id', '=', 'cart.id_produk')->where('session_id' , $_COOKIE['sessionID'])->get();
        $total = Cart::select(DB::raw('SUM(produk.harga) as totalHarga'))->join('produk', 'produk.id', '=', 'cart.id_produk')->where('session_id' , $_COOKIE['sessionID'])->get();
        return view('content.checkout',compact("carts","total"));
    }

    public function store(Request $request)
    {
        if ($request->payment_method == "dijemput") {
           $ongkir = 0;
        }else if ($request->payment_method == "dikirim") {
           $ongkir = 11000;
        }else{
           $ongkir = 0;
        }
        $getIdTrafik = Trafic::select('trafic.*')->where('unique_id',$_COOKIE['sessionID'])->get();

        DB::table('penjualan')->where('#')->insert(array(
            'id_member'=>$getIdTrafik[0]->id_member,
            'nama_pembeli'=>$request->name,
            'email_pembeli' => $request->email,
            'nomor_telepon' => $request->phone,
            'alamat_pengiriman' => $request->alamat,
            'kecamatan_pengiriman' => $request->kecamatan,
            'kota_pengiriman' => $request->kota,
            'provinsi_pengiriman' => $request->provinsi,
            'kode_pos_pengiriman' => $request->kode_pos,
            'tanggal' => date("Y-m-d"),
            'sub_total' => $request->sub_total,
            'ongkir' => $ongkir,
            'total' => $request->sub_total+$ongkir,
            'status' => 'PENDING',
            'id_trafic' => $getIdTrafik[0]->id,
            'id_admin' => '',
            'service_pengiriman' => 'DIJEMPUT',
        ));

        $query = Cart::select('cart.*','produk.harga','produk.nama_produk')->join('produk', 'produk.id', '=', 'cart.id_produk');
        $CekTmp= Cart::select('cart.*')->where('session_id',$_COOKIE['sessionID'])->max('id');
        $idPenjualan= DB::table('penjualan')->where('id_trafic' , $getIdTrafik[0]->id)->max('id');
        if($CekTmp != 0){
          $tempPenjualan = $query->where('session_id' , $_COOKIE['sessionID'])->get();

          foreach ($tempPenjualan as $row){
              $detail_penjualan[] = [
                  'id_penjualan' => $idPenjualan,
                  'id_produk' => $row['id_produk'],
                  'jumlah' => $row['qty'],
                  'harga' => $row['harga'],
                  'total' => $row['qty']*$row['harga'],
              ];
          }
    }
        DB::table('detail_penjualan')->where('#')->insert($detail_penjualan);

        Cart::where('session_id',$_COOKIE['sessionID'])->delete();

        return redirect('/checkoutSuccess');
    }

    public function checkoutSuccess()
    {
        $penjualan = DB::table('penjualan')->orderBy('id', 'desc')->get();
        return view('content.checkoutSuccess',compact('penjualan'));
    }
  }
