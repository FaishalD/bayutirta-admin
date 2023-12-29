<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

use App\Models\Reservasi;

class ReservasiController extends Controller
{
    public function reservasi() {
        return view('reservasi.reservasi');
      
    }
    public function getReservasi()
    {
        $posts = Reservasi::all(); // Retrieve all posts from the database
        return response()->json($posts); // Return the data as JSON
    }

    public function addReservasi(Request $request)
    {
        $validatedData = $request->validate([
            'id_layanan' => 'required|exists:layanans,id_layanan',
            'name' => 'required|max:255',
            'no_telp' => 'required',
            'alamat' => 'required',
            'merk_hp' => 'required'
        ]);

        if ($request->file('foto')) {
            $file= $request->file('foto');
            $filename= date('YmdHi').$file->getClientOriginalName()[0];
            $file->storeAs('reservasi', $filename, 'public');

            $post = new Reservasi([
                'id_layanan' => $request['id_layanan'],
                'name' => $validatedData['name'],
                'no_telp' => $validatedData['no_telp'],
                'alamat' => $validatedData['alamat'],
                'merk_hp' => $validatedData['merk_hp'],
                'keterangan' => $request['keterangan'],
                'foto' => $filename,
                'status' => "Belum Dikonfirmasi",
                'created_at' => now()
            ]);
        }else{

        // Create a new Post instance with the validated data
        $post = new Reservasi([
            'id_layanan' => $request['id_layanan'],
            'name' => $validatedData['name'],
            'no_telp' => $validatedData['no_telp'],
            'alamat' => $validatedData['alamat'],
            'merk_hp' => $validatedData['merk_hp'],
            'keterangan' => $request['keterangan'],
            'status' => "Belum Dikonfirmasi",
            'created_at' => now()
        ]);
        }

        $post->save(); // Save the new post to the database

        return response()->json($post); // Return the new post as JSON
    }
}
