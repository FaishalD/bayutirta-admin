<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Layanan;

class LayananController extends Controller
{
    public function descLayanan()
    {
        return view("layanan.descLayanan");
    }

    public function infoLayanan()
    {
        return view("layanan.infoLayanan");
    }

    public function layanan()
    {
        $layanans = Layanan::all();
        return view("layanan.layanan", [
            'layanan' => $layanans
        ]);
    }
    public function additional()
    {
        return view("layanan.additional");
    }
    public function review()
    {
        return view("layanan.reviewLayanan");
    }
    public function qna()
    {
        return view("layanan.qna");
    }
    public function getLayanan()
    {
        $posts = Layanan::all(); // Retrieve all posts from the database
        $back = json_decode($posts);
        // return view('welcome',['inspections' => $back]);
        return response()->json($posts); // Return the data as JSON
    }

    public function addLayanan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_layanan' => 'required|max:255',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);

        // Create a new Post instance with the validated data
        $post = new Layanan([
            'nama_layanan' => $validatedData['nama_layanan'],
            'harga' => $validatedData['harga'],
            'status' => 1,
            'keterangan' => $validatedData['keterangan'],
            'foto' => $request['foto'],
            'created_at' => now()
        ]);

        $post->save(); // Save the new post to the database

        return response()->json($post); // Return the new post as JSON
    }

    public function updateLayanan(Request $request, Layanan $layanan) {
        $validatedData = $request->validate([
            'nama_layanan' => 'required|max:255',
            'harga' => 'required',
            'keterangan' => 'required'
        ]);

        Course::where($request->id, $course->id)
            ->update([
                'nama_layanan'=> $request->nama_layanan,
                'harga'=> $request->harga,
                'status'=> $request->status,
                'keterangan'=> $request->keterangan,
                'update_at' => now(),
            ]);

        return response()->json($posts);
    }
}