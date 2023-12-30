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
        dd($request);
        $validatedData = $request->validate([
            'nama_layanan' => 'required|max:255',
            'harga_terendah' => 'required',
            'harga_tertinggi' => 'required',
            'keterangan' => 'required',
            'merk_hp' => 'required',
        ]);

        
        if(isset($_FILES["foto"]) && !empty($_FILES["foto"]["name"])){
            $file= $request->file('foto');
            $filename= date('YmdHi').$file->getClientOriginalName()[0];
            // Storage::disk('public')->url($filename);
            // Storage::putFile('photos', new File('admin.bayutirta.masuk.id/public/Image'), $filename);
            $file->storeAs('layanan', $filename, 'public');
            // $file->move('admin.bayutirta.masuk.id/public/Image' , $filename);
            // $file-> move(public_path(), $filename);
            // $request['foto']= $filename;
        }else{
            $filename = 'tidak ada';
        }

        if(isset($_POST['status'])){                       
            $status = 1;
        } else {
            $status = 0;
        }

        // Create a new Post instance with the validated data
        $post = new Layanan([
            'nama_layanan' => $validatedData['nama_layanan'],
            'harga_terendah' => $validatedData['harga_terendah'],
            'harga_tertinggi' => $validatedData['harga_tertinggi'],
            'merk_hp' => $validatedData['merk_hp'],
            'status' => $status,
            'keterangan' => $validatedData['keterangan'],
            'foto' => $filename,
            'created_at' => now()
        ]);

        $post->save(); // Save the new post to the database
        return redirect('/layanan');
        // return response()->json($post); // Return the new post as JSON
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