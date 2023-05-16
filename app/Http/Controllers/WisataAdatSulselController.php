<?php

namespace App\Http\Controllers;

use App\Models\WisataAdatSulsel;
use App\Http\Requests\WisataAdatSulselRequest;
use Illuminate\Http\Request;

class WisataAdatSulselController extends Controller
{
    public function index()
    {
        $WisataAdatSulsel = WisataAdatSulsel::get();
        return view('index', compact('WisataAdatSulsel'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function edit($id)
    {
        $WisataAdatSulsel = WisataAdatSulsel::where('id', $id)->first();
        return view('edit', compact('WisataAdatSulsel'));
    }

    public function lihat($id)
    {
        $WisataAdatSulsel = WisataAdatSulsel::where('id', $id)->first();
        return view('lihat', compact('WisataAdatSulsel'));
    }

    public function store(WisataAdatSulselRequest $request)
    {
        $WisataAdatSulsel = new WisataAdatSulsel();

        $WisataAdatSulsel->nama_tempat_wisata = $request->nama_tempat_wisata;
        $WisataAdatSulsel->penjelasan_singkat = $request->penjelasan_singkat;

        $WisataAdatSulsel->save();

        return redirect('/');
    }

    public function update(WisataAdatSulselRequest $request, $id)
    {
        $WisataAdatSulsel = WisataAdatSulsel::where('id', $id)->first();

        $WisataAdatSulsel->nama_tempat_wisata = $request->nama_tempat_wisata;
        $WisataAdatSulsel->penjelasan_singkat = $request->penjelasan_singkat;

        $WisataAdatSulsel->update();

        return redirect('/');
    }

    public function hapus($id)
    {
        $WisataAdatSulsel = WisataAdatSulsel::where('id', $id)->first();

        $WisataAdatSulsel->delete();

        return redirect('/');
    }
}
