<?php

namespace App\Http\Controllers;


use App\Models\Caleg;
use Illuminate\Http\Request;
use App\Exports\CalegsExport;
use Maatwebsite\Excel\Facades\Excel;

class CalegController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function export()
    {
        return Excel::download(new CalegsExport, 'hasil-pendaftaran.xlsx');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function dashboard()
    // {
    //     return view('dashboard');
    // }
    public function index()
    {
        // return view('caleg.index');
        $caleg = Caleg::orderBy('id', 'desc')->paginate(10);
        return view('caleg.index', compact('caleg'));
    }
    // View Mahasiswa
    // public function index()
    // {
    //     $caleg = Caleg::orderBy('id', 'desc')->paginate(10);
    //     return view('caleg.index', compact('caleg'));
    //     // return Mahasiswa::orderbY('id', 'desc')->paginate(10);
    // }

    // // Create Mahasiswa
    public function create()
    {
        return view('caleg.create');
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
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $caleg->addMediaFromRequest('foto')->toMediaCollection('foto');
        }

        // dd($request->all());
        return redirect()->route('caleg.index')->with('status', 'Caleg has been created successfully.');
    }

    // Edit Mahasiswa
    public function edit(Caleg $caleg)
    {
        return view('caleg.edit', compact('caleg'));
    }

    public function update(Request $request, Caleg $caleg)
    {
        $request->validate([
            // 'nama' => 'required',
            // 'nim' => 'required|max:11',
            // 'alamat' => 'required',
        ]);

        $caleg->fill($request->all())->save();
        // dd($request->all());
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $caleg->addMediaFromRequest('foto')->toMediaCollection('foto');
        }

        return redirect()->route('caleg.index')->with('success', 'Mahasiswa Has Been updated successfully');
    }

    // Delete Mahasiswa
    public function destroy(Caleg $caleg)
    {
        $caleg->delete();
        return redirect()->route('caleg.index')->with('success', 'Caleg has been deleted successfully');
    }
}
