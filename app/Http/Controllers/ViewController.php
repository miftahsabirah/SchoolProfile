<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function indexvieworganisasi(){
        return view('organisasi.dewanSekolah');
    }
    public function indexviewstrukturbagan(){
        return view('organisasi.strukturBagan');
    }
    public function indexviewstrukturtugas(){
        return view('organisasi.strukturTugas');
    }
    public function indexviewberita(){
        return view('Informasi.detailBerita');
    }
    public function indexviewsarpras(){
        return view('sarpras.sarpras');
    }
    public function indexviewgaleri(){
        return view('');
    }

    public function indexviewdetailakreditasi(){
        return view('profil.detailAkreditasi');
    }