<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
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
