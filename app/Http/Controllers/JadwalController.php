<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Anggota;
use App\Models\JadwalAnggota;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name'           =>'required|min:0',
            
        ]);

        //create post
        
        Jadwal::create([
            'name'    =>$request->name,
            
        ]);

        return redirect()->route('anggota.index')->with(['success' => 'Tag berhasil ditambah!']);
    }
}
