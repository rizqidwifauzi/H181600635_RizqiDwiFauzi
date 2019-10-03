<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
        //elaquent
        $listKategoriBerita=KategoriBerita::all(); //select * from kategori_berita 

        return view('kategori_berita.index', compact ('listKategoriBerita'));
    }

    public function show($id){
        //$kategoriBerita=KategoriBerita::where('id',$id)->first();
        $kategoriBerita=KategoriBerita::find($id);    

        return view('kategori_berita.show', compact('kategoriBerita')); 
    }

    public function create(){
        return view('kategori_berita.create');
    }

    public function store(Request $request){
        $input= $request->all();
       
        KategoriBerita::create($input);

        return redirect(route('kategori_berita.index'));
    }
}

