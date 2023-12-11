<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use function Laravel\Prompts\info;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Pegawai::all();

        return view('index', compact(['pegawai']));
    }

    public function updateForm($id){
        $pegawai = Pegawai::find($id);
        return view('updateForm', compact('pegawai'));
    }

    public function update(Request $request){
        $pegawai = Pegawai::find($request->id);
        $pegawai->name = $request->name;
        $pegawai->Posisi = $request->posisi;
        $pegawai->Gaji = $request->gaji;
        $pegawai->save();
        return redirect('/');
    }
}