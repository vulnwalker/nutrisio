<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Param;
use Illuminate\Pagination\LengthAwarePaginator;

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
        $memberRekut = DB::table('komisi')->where('jenis_komisi', 'REKRUT')->where('id_member', $user->id)->whereYear('tanggal',date("Y"))->whereMonth('tanggal', date('m'))->count();
        $komisiReferal = DB::table('komisi')->where('jenis_komisi', 'REKRUT')->where('id_member', $user->id)->whereYear('tanggal',date("Y"))->whereMonth('tanggal', date('m'))->sum('komisi');
        $komisiTeam = DB::table('komisi')->where('jenis_komisi', 'PENJUALAN')->where('id_member', $user->id)->whereYear('tanggal',date("Y"))->whereMonth('tanggal', date('m'))->sum('komisi');

        $getMembers = DB::table('users')->whereYear('tanggal_join',date("Y"))->whereMonth('tanggal_join', date('m'))->get();


        $dataMember = array();
        foreach ($getMembers as $getMember) {
            $dataUpline = json_decode($getMember->upline);

                if ($dataUpline[3]->LEVEL4 == $user->id) {
                    $dataMember[] = array(
                        "id" => $getMember->id,
                        "nama" => $getMember->nama,
                        "email" => $getMember->email,
                        "tanggal_join" => $getMember->tanggal_join,
                    );
                }else{

                }
        }

        return view('home',compact("memberRekut","komisiReferal","komisiTeam","total","dataMember"));
       // print_r( $dataUpline);
    }

    public function team()
    {
        $user = Auth::user();

        $getMembers = DB::table('users')->get();

        $dataMember = array();
        foreach ($getMembers as $getMember) {
            $dataUpline = json_decode($getMember->upline);

                if ($dataUpline[3]->LEVEL4 == $user->id) {
                    // $downline = DB::table('users')->where('uplines', 'LIKE',`'%"LEVEL4": "$getMember->id"%'`)->count('id');
                    $wasu= '%"LEVEL4": "'.$getMember->id.'"%';
                    $downline = DB::table('users')->select(DB::raw('COUNT(id) AS jumlah'))->where('upline', 'LIKE',"$wasu")->first();

                    $dataMember[] = array(
                        "id" => $getMember->id,
                        "nama" => $getMember->nama,
                        "email" => $getMember->email,
                        "tanggal_join" => $getMember->tanggal_join,
                        "downline" => $downline->jumlah,
                    );
                }else{

                }
        }

                // Get current page form url e.x. &page=1
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Create a new Laravel collection from the array data
        $itemCollection = collect($dataMember);

        // Define how many items we want to be visible in each page
        $perPage = 50;

        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        // set url path for generted links
        $paginatedItems->setPath("team/");

       return view('contentMember.team',compact("paginatedItems"));
    }

    public function landingPage()
    {
        $user = Auth::user();
        $email = Param::hexEncode($user->email);
        $dataArtikels = DB::table('artikel')->get()->sortByDesc('id');
        $urlWeb = DB::table('setting')->where('nama', 'URL_ARTIKEL')->get();
        return view('contentMember.landingPage',compact("dataArtikels","urlWeb","email"));
    }

    public function trafic()
    {
        $user = Auth::user();
        $topTeen = DB::table('trafic','artikel')->select(DB::raw('COUNT(trafic.id) as totalTrafic'),'artikel.judul')->join('artikel', 'artikel.id', '=', 'trafic.id_artikel')->where('trafic.id_member', $user->id)->whereMonth('trafic.tanggal', date('m'))->groupBy('trafic.id_artikel')->limit(10)->get();

        $dataTrafics = DB::table('trafic','artikel')->select('trafic.*','artikel.judul')->join('artikel', 'artikel.id', '=', 'trafic.id_artikel')->where('trafic.id_member', $user->id)->whereMonth('trafic.tanggal', date('m'))->paginate(25);
        return view('contentMember.trafic',compact("dataTrafics","topTeen"));

    }

    public function profile()
    {
       $user = Auth::user();
       return view('contentMember.profile');
    }

    public function profileUpdate(Request $request)
    {
       $user = Auth::user();

        DB::table('users')->where('id', $user->id)->update([
            'alamat' => str_replace("\n","<br>",$request->alamat),
            'nomor_rekening' => $request->nomor_rekening,
            'nama_bank' => $request->nama_bank,
            'atas_nama' => $request->atas_nama,
            'nomor_telepon' => $request->nomor_telepon,
            'nama' => $request->nama,
        ]);

       return redirect('profile');
    }

    public function statusOrder()
    {
        $dataPenjualans = DB::table('penjualan')->get()->sortByDesc('id');
        return view('contentMember.orderStatus',compact("dataPenjualans"));
    }

    public function detailPenjualan($id)
    {
        $dataPenjualans = DB::table('detail_penjualan','penjualan','produk.nama_produk')->join('penjualan', 'penjualan.id', '=', 'detail_penjualan.id_penjualan')->join('produk', 'produk.id', '=', 'detail_penjualan.id_produk')->where('detail_penjualan.id_penjualan',$id)->get();
        $atasNama = "#".$id." ".$dataPenjualans[0]->nama_pembeli;

        $getOngkir = DB::table('penjualan')->where('id',$id)->get();
        $getTotal = DB::table('detail_penjualan')->where('id_penjualan',$id)->sum('total');
        return view('contentMember.detailPenjualan',compact("dataPenjualans","atasNama","getTotal","getOngkir"));
    }
}
