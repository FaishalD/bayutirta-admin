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
        $reservasi = Reservasi::orderBy('created_at', 'DESC')->get();
        
        return view("dashboard.dashboard",[
            'belum_dikonfirmasi'=>$belum_dikonfirmasi,
            'diterima'=>$diterima,
            'total'=>$total,
            'reservasi'=>$reservasi
        ]);
    }
    
}
