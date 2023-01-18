<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Anggota;
use App\Models\JadwalAnggota;
use Illuminate\Http\Request;

class JadwalAnggotaController extends Controller
{
    public function index (Jadwal $jadwal)
    {
        $jadwal = Jadwal::latest()->paginate(5);
        return view('anggota.insertjadwal',compact('jadwal'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'name'           =>'required|min:0',
            
        ]);

         //create post
        
         Jadwal::create([
            'name'    =>$request->name,
            
        ]);
        return redirect()->route('jadwals.index')->with(['success' => 'Data Berhasil Disimpan!']);
    
    }

    public function destroy(Jadwal_Anggota $jadwal_Anggota)
    {
        //delete post
        $anggota->delete();

        //redirect to index
        return redirect()->route('anggota.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
