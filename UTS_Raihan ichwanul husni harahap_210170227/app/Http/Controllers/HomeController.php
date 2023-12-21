<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $data = Matakuliah::all();
        $maha = Mahasiswa::all();
        return view('dashboard', compact('data', 'maha'));
    }

    public function index()
    {
        $data = User::all();

        return view('forms', compact('data'));
    }
    public function create()
    {
        // $data = User::all();

        return view('create');
    }

    public function store(Request $request)
    {
        Matakuliah::create(
            [
                'nama_matakuliah' => $request->nama_matakuliah,
                'sks' => $request->sks,
                'dosen' => $request->dosen,
            ]
        ); //
        return redirect()->route('dashboard');
    }

    public function edit(Matakuliah $data)
    {
        return view('edit', compact('data'));
    }

    public function update(Request $request, Matakuliah $data)
    {
        $data->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
        ]);

        return redirect('dashboard')->with('success', 'Post berhasil diperbarui!');
    }

    public function delete(Request $request, $id)
    {
        $data = Matakuliah::find($id);
        if ($data) {
            $data->delete();
        }

        //$data->update([
        //  'nama' => $request->input('nama'),
        //'nim' => $request->input('nim'),
        //]);

        return redirect('dashboard');
    }
}
