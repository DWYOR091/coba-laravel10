<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Models\hadiah;
use Illuminate\Http\Request;

class AnggotaHadiahController extends Controller
{
    public function index(){
        $anggota = anggota::all();
        return view('anggota.index',compact('anggota'));
    }
}
