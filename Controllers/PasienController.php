<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Kelurahan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class PasienController extends Controller
{
    public function show(){
        $list_pasien = Pasien::all();// select * from pasien
        return view('pasien.show', ['list_pasien'=>$list_pasien]);
    }

    public function create(){
        $objpasien = new Pasien();// data baru
        $objpasien->gender='L';
        $objpasien->kode='P-';
        $list_kelurahan = Kelurahan::all();
        return view('pasien.form',['pasien'=>$objpasien,'list_kelurahan'=>$list_kelurahan]);
    }

    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'kelurahan_id' => 'required',
        ]);

        if(isset($request->id)){
            Pasien::find($request->id)->update($request->all());
            return redirect()->route('pasien.show')->with('success','Data berhasil diupdate');
        }else{
            Pasien::create($request->all());
            return redirect()->route('pasien.show')->with('success','Data berhasil disimpan');
        }
    }

    public function edit($id){
        $objpasien = Pasien::find($id);// data ada di tabel pasien
        $list_kelurahan = Kelurahan::all();
        return view('pasien.form',['pasien'=>$objpasien,'list_kelurahan'=>$list_kelurahan]);
    }

    public function destroy($id) : RedirectResponse
    {
        Pasien::find($id)->delete();
        return redirect()->route('pasien.show')->with('success','Data berhasil dihapus');
    }

}
