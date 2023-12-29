<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;

class UlasanController extends Controller
{
    public function ulasan() {
        $ulasan = Ulasan::all();
        return view('ulasan.ulasan',[
            'ulasan'=>$ulasan
        ]);
    }
}
