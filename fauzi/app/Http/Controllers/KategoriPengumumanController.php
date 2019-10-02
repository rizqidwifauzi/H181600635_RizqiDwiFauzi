<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        //elaquent
        $listKategoriPengumuman=KategoriPengumuman::all(); //select * from kategori_galeri 

        return view('kategori_pengumuman.index', compact ('listKategoriPengumuman'));
    }

    public function show($id){
        //$kategoriPengumuman=KategoriPengumuman::where('id',$id)->first();
        $kategoriPengumuman=KategoriPengumuman::find($id);    

        return view('kategori_pengumuman.show', compact('kategoriPengumuman')); 
    }
}
