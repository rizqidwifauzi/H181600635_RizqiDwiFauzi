<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function index(){
        $listGaleri=Galeri::all();
            
    
        return view('galeri.index', compact('listGaleri'));
        
    }
    
        public function show($id){
            $galeri=Galeri::find($id);
    
            return view('galeri.show',compact('galeri'));
        }
}