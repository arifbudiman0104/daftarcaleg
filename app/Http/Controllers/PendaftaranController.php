<?php

namespace App\Http\Controllers;

use App\Models\Caleg;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function pendaftaran()
    {
        return view('pendaftaran');
    }
    public function store(Request $request)
    {
        $request->validate([
            // 'foto' => 'required',
            // 'nama' => 'required',
            // 'daerahpemilihan' => 'required',
            // 'nik' => 'required',
            // 'notelepon' => 'required',
            // 'tempatlahir' => 'required',
            // 'tanggallahir' => 'required',
            // 'jeniskelamin' => 'required',
            // 'agama' => 'required',
            // 'alamatktp' => 'required',
            // 'alamatdomisili' => 'required',
            // 'statusperkawinan' => 'required',
            // 'pendidikanterakhir' => 'required',
            // 'pekerjaan' => 'required',
            // 'sd' => 'required',
            // 'smp' => 'required',
            // 'sma' => 'required',
            // 's1' => 'required',
            // 's2' => 'required',
            // 's3' => 'required',
            // 'riwayatdiklat' => 'required',
            // 'riwayatorganisasi' => 'required',
            // 'riwayatpekerjaan' => 'required',
            // 'riwayatpenghargaan' => 'required',
        ]);

        $caleg = Caleg::create($request->all());
        // Caleg::create($request->all());
        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            $caleg->addMediaFromRequest('foto')->toMediaCollection('foto');
        }

        // dd($request->all());
        return redirect()->route('pendaftaran')->with('status', 'Caleg has been created successfully.');
    }


}
