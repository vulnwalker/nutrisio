<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use DB;
use RajaOngkir;
use App\Trafic;
use App\Param;
use App\User;
use App\Cart;
use Auth;

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

    public function  addTocart(Request $request){
        $id = $request->id;
        $jumlah = $request->jumlah;
        DB::table('cart')->where('#')->insert(array('qty'=>$jumlah,'id_produk' => $id, 'session_id' => $_COOKIE['sessionID']));

        return redirect('cart');
    }

    public function cart(){
        $carts = Cart::select('cart.*','produk.harga_member','produk.harga','produk.nama_produk')->join('produk', 'produk.id', '=', 'cart.id_produk')->where('session_id' , $_COOKIE['sessionID'])->get();
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
        $user = Auth::user();
        if (!empty($user->id)) {
           $harga="harga_member";
        }else{
           $harga="harga";
        }
        $carts = Cart::select('cart.*','produk.harga','produk.nama_produk')->join('produk', 'produk.id', '=', 'cart.id_produk')->where('session_id' , $_COOKIE['sessionID'])->get();
        $total = Cart::select(DB::raw("SUM(produk.$harga * cart.qty) as totalHarga"))->join('produk', 'produk.id', '=', 'cart.id_produk')->where('session_id' , $_COOKIE['sessionID'])->get();

        $dataProvinsi = RajaOngkir::Provinsi()->all();

        return view('content.checkout',compact("carts","total","dataProvinsi"));
        // echo json_encode($dataProvinsi);

    }

    public function store(Request $request)
    {
        
        $penjualanCount = DB::table('penjualan')->where('tanggal', date("Y-m-d"))->count();

        if (strlen($penjualanCount + 2) == 3) {
         $kodeUnik = $request->sub_total + ltrim($penjualanCount + 2);
        }else{
         $kodeUnik = $request->sub_total + $penjualanCount + 2;
        }

        if ($request->payment_method == "dijemput") {
           $ongkir = 0;
           $kota = $request->hiddenKota;
           $provinsi =  $request->hiddenProv;
           $metodePengiriman = "DIJEMPUT";
        }else if ($request->payment_method == "dikirim") {
          $provinsi =  $request->hiddenProv;
          $kota = $request->hiddenKota;
          $metodePengiriman = $request->metodePengiriman;
           $ongkir = $request->ongkirValue;
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
            'kota_pengiriman' => $kota,
            'provinsi_pengiriman' => $provinsi,
            'kode_pos_pengiriman' => $request->kode_pos,
            'tanggal' => date("Y-m-d"),
            'sub_total' => $request->sub_total,
            'ongkir' => $ongkir,
            'total' => $kodeUnik+$ongkir,
            'status' => 'PENDING',
            'id_trafic' => $getIdTrafik[0]->id,
            'id_admin' => '',
            'service_pengiriman' => $metodePengiriman,
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
        
         $kodeUnik = $penjualan[0]->total;
        return view('content.checkoutSuccess',compact('penjualan','kodeUnik'));
    }

    public function getKota(Request $request)
    {
        $dataKota = RajaOngkir::Kota()->byProvinsi($request->id_prov)->get();

        $jsonKota = array('dataKota' => $dataKota,
        );

        return json_encode($jsonKota);
    }

    public function getInfoKota(Request $request)
    {
       // $getBerat = RajaOngkir::Kota()->find($request->id_kota);

        $getBerat = Cart::select(DB::raw('SUM(produk.berat * cart.qty) as totalBerat'))->join('produk', 'produk.id', '=', 'cart.id_produk')->where('session_id' , $_COOKIE['sessionID'])->get();

        $getInfoKota = RajaOngkir::Cost([
            'origin'        => 22,
            'destination'   => $request->id_kota,
            'weight'        => $getBerat[0]->totalBerat,
            'courier'       => 'jne',
        ])->get();

        $jsonKota = array('getInfoKota' => $getInfoKota,
        );

        return str_replace("value", "hargaOngkir", json_encode($jsonKota));
    }

    public function changeQty(Request $request)
    {
       
        Cart::where('session_id', $_COOKIE['sessionID'])->where('id', $request->id)->update(['qty' => $request->jumlah]);
        $array = array('success' => 1);
        return json_encode($array);
    }

    public function gallery()
    {
       
       $setting = DB::table('setting')->where('nama', 'URL_GAMBAR')->get();
       $gallerys = DB::table('galeri')->get();

       return view('content.gallery',compact('setting'))->with('gallerys', $gallerys);
    }
  }
