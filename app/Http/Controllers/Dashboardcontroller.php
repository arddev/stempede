<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Auth,DB, Config;

class Dashboardcontroller extends Controller
{
    //
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $date1=date('d-m');
        # code...
        $confiq = DB::table('konfigurasi')->where('id',1)->first();
        $antrian = DB::table('data')->count();
        $ultah = DB::table('datalengkap')->where('tgllahir',$date1)->where('statusultah',0)->count();
        $berkala = DB::table('berkala')->where('tglinput',$date1)->where('statusberkala',0)->count();
        $sms = DB::table('datasms')->count();        

        $data = file_get_contents($confiq->linkstatus);
        $json = json_decode($data, TRUE);

        if ($json["data"]["whatsapp"]["status"] == 'connected'){
            $con='disabled';
            $status = 'connected';
        }else{
            $con='';
            $status = 'disconnected';
        }
        //$databerkala= mysqli_query($koneksi,"select * from berkala where tglinput = '$date3' and statusberkala ='0'");
        //($koneksi,"select * from datasms");
        //$sts = \DB::table('kontrol')->where('id',1)->first();
        //return view('Dashboard');
        // return $confiq;
        return view('dashboard',compact('confiq','antrian','ultah','berkala','sms','con','status'));
    }

}
