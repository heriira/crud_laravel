<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    /**
     * Function untuk menampilkan halaman landing list siswa 
     */  

    function tampil() {
        $siswa = Siswa::get();
        return view('siswa.tampil', compact('siswa'));
    }

    /**
     * Function untuk menampilkan halaman tambah data mahasiswa 
     */ 

    function tambah(){
        return view ('siswa.tambah');
    }

    /**
     * Function untuk simpan data mahasiswa ke database 
     */ 

    function submit(Request $request){
        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->save();

        return redirect()->route('siswa.tampil');
    }

     /**
     * Function untuk menampilkan halaman edit data siswa 
     */ 

    function edit($id){
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Function untuk menyimpan perubahan data siswa 
     */ 

    function update(Request $request, $id){
        $siswa = Siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->no_hp = $request->no_hp;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->hobi = $request->hobi;
        $siswa->update();

        return redirect()->route('siswa.tampil');
    }

    /**
     * Function untuk menampilkan menghapus data mahasiswa 
     */ 
    
    function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect()->route('siswa.tampil');
    }
}
