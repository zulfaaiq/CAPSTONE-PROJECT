<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RSUDKabBrebesModel;

class RSUDKabBrebesController extends Controller
{
    public function tampilrsud_kab_brebes()
    {
        $rsud_kab_brebes = RSUDKabBrebesModel::select('*')
             ->get();
        return view('tampilrsud_kab_brebes', ['rsud_kab_brebes' => $rsud_kab_brebes]);
    }

    public function tambahrsud_kab_brebes()
    {
        return view('tambahrsud_kab_brebes');
    }

    public function simpanrsud_kab_brebes(Request $request)
    {
        $rsud_kab_brebes = RSUDKabBrebesModel::create([
            'gol_darah' => $request->gol_darah,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('tampilrsud_kab_brebes');
    }
}
