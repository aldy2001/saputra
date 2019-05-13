<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formulirController extends Controller

{

   public function proses(Request $request){
    DB::table('register')->insert([
        'nama_lengkap' => $request->name,
        'alamat_lengkap' =>$request->alamat_lengkap,
        'email' =>$request->email,
        'jumlah_pinjaman' =>$request->jumlah_pinjaman,
        'masa_pinjaman' =>$request->masa_pinjaman,
        'penghasilan_perbulan' =>$request->penghasilan_perbulan,
        'pekerjaan' =>$request->pekerjaan,
        'provinsi' =>$request->Provinsi,
        'kota' =>$request->Kota,
        'umur' =>$request->umur,
        'jenis_klamin' =>$request->jenis_klamin

    ]);

   }
}
