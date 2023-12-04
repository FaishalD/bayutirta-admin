<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function artikel() {
        return view ('artikel.artikel');
    }
    public function editArtikel() {
        return view ('artikel.editArtikel');
    }
}
