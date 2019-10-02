<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){
        //elaquent
        $listKategoriGaleri=KategoriGaleri::all(); //select * from kategori_galeri 

        return view('kategori_galeri.index', compact ('listKategoriGaleri'));
    }

    public function show($id){
        //$kategoriGaleri=KategoriGaleri::where('id',$id)->first();
        $kategoriGaleri=KategoriGaleri::find($id);    

        return view('kategori_galeri.show', compact('kategoriGaleri')); 
    }
}
