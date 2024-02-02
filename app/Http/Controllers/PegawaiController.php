<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        //mengambil data semua pegawai
        $pegawai = Pegawai::orderBy('id','ASC')->get();
         // select * from pegawai
        return view('pegawai.index', compact('pegawai'));
    }

    public function tambah(Request $req){
        //validasi
        $this->validate($req,[
            'nama' => 'required|min:5',
            'alamat' => 'required|min:10',
        ]);

        $data = [
          'nama' => $req->nama,
          'alamat' => $req->alamat
        ];

        Pegawai::create($data);

        return redirect('/pegawai')->with('success','Data berhasil ditambahkan');
    }

    public function hapus($id){
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect('/pegawai')->with('success','Data berhasil dihapus');
    }

    // public function edit($id){
    //     $pegawai = Pegawai::findOrFail($id);
    //     return view('pegawai.index', compact('pegawai'));
    // }

    public function update(Request $req,$id){
        $pegawai = Pegawai::findOrFail($id);
        $data = [
            'nama' => $req->nama,
            'alamat' => $req->alamat
        ];
        $pegawai->update($data);

        return redirect('/pegawai')->with('success','Update berhasil');
    }
}


