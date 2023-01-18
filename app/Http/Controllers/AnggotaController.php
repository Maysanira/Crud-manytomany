<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Jadwal;
use App\Models\JadwalAnggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $katakunci=request('search');
        if($katakunci){
         $anggotas = Anggota::where( 'name', 'LIKE', '%' . $katakunci . '%' )->paginate(4);
              }  else {
                $anggotas = Anggota::latest()->paginate(4);
              } 
            return view('anggota.index',$anggotas,compact('anggotas'));  
    }
}
