<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        //elaquent
        $listKategoriArtikel=KategoriArtikel::all(); //select * from kategeori_artikel 

        return view('kategori_artikel.index', compact ('listKategoriArtikel'));
    }

    public function show($id){
        //$kategoriArtikel=KategoriArtikel::where('id',$id)->first();
        $kategoriArtikel=KategoriArtikel::find($id);    

        return view('kategori_artikel.show', compact('kategoriArtikel')); 
    }
}
