<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $memberRekut = DB::table('komisi')->where('jenis_komisi', 'REKRUT')->where('id_member', $user->id)->count();
        $komisiReferal = DB::table('komisi')->where('jenis_komisi', 'REKRUT')->where('id_member', $user->id)->sum('komisi');
        $komisiTeam = DB::table('komisi')->where('jenis_komisi', 'PENJUALAN')->where('id_member', $user->id)->sum('komisi');

        return view('home',compact("memberRekut","komisiReferal","komisiTeam","total"));
    }
}
