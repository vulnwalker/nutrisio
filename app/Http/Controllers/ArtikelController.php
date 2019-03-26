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

        $artikel = DB::table('artikel')->where('id', $id)->get();       
        return view('content.artikel',compact('artikel'));
    }
}
