<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Layanan;
use App\Models\Reservasi;

class dashboardController extends Controller
{
    //
    public function dashboard()
    {
        $belum_dikonfirmasi = Reservasi::where('status','=','Belum Dikonfirmasi')->count();
        // $ditolak = Reservasi::where('status','=','pending')->count();
        $diterima = Reservasi::where('status','=','Diterima')->count();
        $total = Reservasi::all()->count();
        $reservasi = Reservasi::orderBy('created_at', 'DESC')->take(5)->get();
        foreach ($reservasi as $item) {
            $layanan = Layanan::where('id_layanan','=',$item->id_layanan)->first();
            $item['nama_layanan']=$layanan->nama_layanan;
        }
        return view("dashboard.dashboard",[
            'belum_dikonfirmasi'=>$belum_dikonfirmasi,
            'diterima'=>$diterima,
            'total'=>$total,
            'reservasi'=>$reservasi
        ]);
    }
    
}
