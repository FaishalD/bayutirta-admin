<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Artikel;

class artikelController extends Controller
{
    public function artikel() {
        $artikels = Artikel::all();
        return view ('artikel.artikel',[
            'artikel'=>$artikels
        ]);
    }
    public function editArtikel() {
        return view ('artikel.editArtikel');
    }
    public function getArtikel()
    {
        $posts = Artikel::all(); // Retrieve all posts from the database
        $back = json_decode($posts);
        // return view('welcome',['inspections' => $back]);
        return response()->json($posts); // Return the data as JSON
    }
    public function addArtikel(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'nama_penulis' => 'required',
            'title_penulis' => 'required',
            'isi' => 'required'
        ]);

        // Create a new Post instance with the validated data
        $post = new Artikel([
            'judul' => $validatedData['judul'],
            'nama_penulis' => $validatedData['nama_penulis'],
            'title_penulis' => $validatedData['title_penulis'],
            'isi' => $validatedData['isi'],
            'created_at' => now()
        ]);

        $post->save(); // Save the new post to the database

        return response()->json($post); // Return the new post as JSON
    }
}
