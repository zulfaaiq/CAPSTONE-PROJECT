<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RSUDKabTegalModel;

class RSUDKabTegalController extends Controller
{
    public function tampilrsud_kab_tegal()
    {
        $rsud_kab_tegal = RSUDKabTegalModel::select('*')
             ->get();
        return view('tampilrsud_kab_tegal', ['rsud_kab_tegal' => $rsud_kab_tegal]);
    }

    public function umum_tampilrsud_kab_tegal()
    {
        $rsud_kab_tegal = RSUDKabTegalModel::select('*')
             ->get();
        return view('umum_tampilrsud_kab_tegal', ['rsud_kab_tegal' => $rsud_kab_tegal]);
    }

    public function tambahrsud_kab_tegal()
    {
        return view('tambahrsud_kab_tegal');
    }

    public function simpanrsud_kab_tegal(Request $request)
    {
        $rsud_kab_tegal = RSUDKabTegalModel::create([
            'gol_darah' => $request->gol_darah,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('tampilrsud_kab_tegal');
    }

    public function ubahrsud_kab_tegal($id)
    {
        $rsud_kab_tegal = RSUDKabTegalModel::select('*')
                    ->where('id', $id)
                    ->get();

        return view('ubahrsud_kab_tegal', ['rsud_kab_tegal' => $rsud_kab_tegal]);
    }

    public function updatersud_kab_tegal(Request $request)
    {
    $rsud_kab_tegal = RSUDKabTegalModel::where('id', $request->id)
                ->update([
                        'gol_darah' => $request->gol_darah,
                        'jumlah' => $request->jumlah,
                ]);

    return redirect()->route('tampilrsud_kab_tegal');
    }

    public function hapusrsud_kab_tegal($id)
    {
        $rsud_kab_tegal = RSUDKabTegalModel::where('id', $id)
                ->delete();

        return redirect()->route('tampilrsud_kab_tegal');
    }
}
