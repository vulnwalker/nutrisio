<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Trafic;
use App\User;
use App\Param;
class ArtikelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {

      $cookieValue= md5(date("Y-m-d H:i:s"));
      if (!isset($_COOKIE['sessionID'])) {
        // setcookie("sessionID", $cookieValue,99999999999);
        $sessionIDSession = $cookieValue;
      }else{
        $sessionIDSession = $_COOKIE['sessionID'];
      }

    $cekTrafic = Trafic::select('trafic.*')->where('unique_id',$sessionIDSession)->count();
    $cekEmail = User::select('users.*')->where('email',Param::hexDecode(@$_GET['ref']))->get();
    if ($cekTrafic == 0) {
        if (!empty(@$_GET['ref'])) {
            Trafic::where('#')->insert(array('id_member' => $cekEmail[0]->id, 'unique_id' => $sessionIDSession,'tanggal' => date("Y-m-d"),'id_artikel' =>$id));
        }else{
            Trafic::where('#')->insert(array('id_member' => '0', 'unique_id' => $sessionIDSession,'tanggal' => date("Y-m-d"),'id_artikel' =>$id));
        }

    }else{
        $cekTraficData = Trafic::select('trafic.*')->where('unique_id',$sessionIDSession)->get();
        if (!empty(@$_GET['ref']) && $cekTraficData[0]->id_member == 0) {
            $cekEmail = User::select('users.*')->where('email',Param::hexDecode(@$_GET['ref']))->get();
            // $traficUpdate = App\Trafic::where('unique_id', session()->getId())->first();
            Trafic::where('unique_id', $sessionIDSession)->update(['id_member' => $cekEmail[0]->id]);
            // $traficUpdate->id_member = $cekEmail[0]->id;
            // $traficUpdate->save();
        }else{

        }
    }


        $artikel = DB::table('artikel')->where('id', $id)->get();
        return view('content.artikel',compact('artikel'));
    }
}
