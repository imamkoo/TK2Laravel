<?php

namespace App\Http\Controllers;

use App\Charts\Chart;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $dataMahasiswa = Mahasiswa::orderBy('NIM', 'asc')->get();
        return view('mahasiswa.index', compact('dataMahasiswa'));
    }

    public function create(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->back()->with('success', 'Data Added!');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect()->route('index')->with('success', 'Data Updated!');
    }

    public function delete($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete($mahasiswa);
        return redirect()->route('index')->with('success', 'Data Deleted!');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function nilai(Chart $chart)
    {
        $dataMahasiswa = Mahasiswa::orderBy('GPA', 'asc')->get();
        return view('nilai.index', compact('dataMahasiswa'), ['chart' => $chart->build()]);
    }

    public function createNilai(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('nilai.nilai', compact('mahasiswa'));
    }

    public function hitungNilai(Request $request, $id)
    {
        $quis = $request->input('quis');
        $tugas = $request->input('tugas');
        $absensi = $request->input('absensi');
        $praktek = $request->input('praktek');
        $uas = $request->input('UAS');
        $result = ($quis + $tugas + $absensi + $praktek + $uas) / 5;

        if ($result <= 65) {
            $gpa = 'D';
        } elseif ($result <= 75) {
            $gpa = 'C';
        } elseif ($result <= 85) {
            $gpa = 'B';
        } elseif ($result <= 100) {
            $gpa = 'A';
        }

        $data = [
            'quis' => $request->quis,
            'tugas' => $request->tugas,
            'absensi' => $request->absensi,
            'praktek' => $request->praktek,
            'UAS' => $request->UAS,
            'GPA' => $gpa
        ];

        Mahasiswa::where('id', $id)->update($data);

        return redirect()->route('nilai')->with('success', 'Nilai Added!');
    }
}