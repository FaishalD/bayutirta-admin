<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Layanan;

class dashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view("pages.dashboard");
    }
    
}
