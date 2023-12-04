<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view("pages.dashboard");
    }
    public function layanan() {
        return view("pages.layanan");
    }
}
