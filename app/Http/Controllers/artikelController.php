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
        
        // if($request->file('foto')){
            $file= $request->file('foto');
            $filename= date('YmdHi').$file->getClientOriginalName()[0];
            // Storage::disk('public')->url($filename);
            // Storage::putFile('photos', new File('admin.bayutirta.masuk.id/public/Image'), $filename);
            $file->storeAs('images', $filename, 'public');
            // $file->move('admin.bayutirta.masuk.id/public/Image' , $filename);
            // $file-> move(public_path(), $filename);
            // $request['foto']= $filename;
        // }


        // Create a new Post instance with the validated data
        $post = new Artikel([
            'judul' => $validatedData['judul'],
            'nama_penulis' => $validatedData['nama_penulis'],
            'title_penulis' => $validatedData['title_penulis'],
            'isi' => $validatedData['isi'],
            'foto' => $filename,
            'created_at' => now()
        ]);

        $post->save(); // Save the new post to the database

        return redirect('artikel'); // Return the new post as JSON
    }

    public function deleteArtikel(string $id)
    {
        Artikel::where('id_artikel', '=', $id)->delete();

        return redirect('artikel');
    }
}
