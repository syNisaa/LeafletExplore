<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Gunung;
use App\Models\Bandara;
use App\Models\Bali;

class PetaController extends Controller
{
    public function index(){
        $list_provinsi = Provinsi::all();
        return view('peta.index',[
            'list_provinsi' => $list_provinsi
        ]);
    }

    // Peta Provinsi1
    public function provinsi(){
        $list_gunung = Gunung::all();
        $list_provinsi = Provinsi::all();
        $list_bandara = Bandara::all();
        return view('templateUser.index',[
            'list_provinsi' => $list_provinsi, 'list_gunung' => $list_gunung, 'list_bandara' => $list_bandara 
        ]);
    }

    public function bali(){
        $list_gunung = Gunung::all();
        $list_provinsi = Provinsi::all();
        $list_bandara = Bandara::all();
        $list_bali = Bali::all();
        return view('templateUser.bali',[
            'list_provinsi' => $list_provinsi, 'list_gunung' => $list_gunung, 'list_bandara' => $list_bandara, 'list_bali' => $list_bali 
        ]);
    }


    public function coba(){
        $list_gunung = Gunung::all();
        $list_provinsi = Provinsi::all();
        $list_bandara = Bandara::all();
        $list_bali = Bali::all();
        return view('templateUser.coba',[
            'list_provinsi' => $list_provinsi, 'list_gunung' => $list_gunung, 'list_bandara' => $list_bandara, 'list_bali' => $list_bali 
        ]);
    }

    public function data(){
        $list_gunung = Gunung::all();
        $list_provinsi = Provinsi::all();
        $list_bandara = Bandara::all();
        $list_bali = Bali::all();
        return view('templateUser.alldata',[
            'list_provinsi' => $list_provinsi, 'list_gunung' => $list_gunung, 'list_bandara' => $list_bandara, 'list_bali' => $list_bali 
        ]);
    }


    public function explore(){
        $list_provinsi = Provinsi::all();
        return view('templateUser.explore',[
            'list_provinsi' => $list_provinsi
        ]);
    }

    public function gunung(){
        $list_gunung = Gunung::all();
        return view('index',[
            'list_gunung' => $list_gunung
        ]);
    }

}
