<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RSUDKotaTegalModel;

class RSUDKotaTegalController extends Controller
{
    public function tampilrsud_kota_tegal()
    {
        $rsud_kota_tegal = RSUDKotaTegalModel::select('*')
             ->get();
        return view('tampilrsud_kota_tegal', ['rsud_kota_tegal' => $rsud_kota_tegal]);
    }

    public function tambahrsud_kota_tegal()
    {
        return view('tambahrsud_kota_tegal');
    }

    public function simpanrsud_kota_tegal(Request $request)
    {
        $rsud_kota_tegal = RSUDKotaTegalModel::create([
            'gol_darah' => $request->gol_darah,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('tampilrsud_kota_tegal');
    }

    public function ubahrsud_kota_tegal($id)
    {
        $rsud_kota_tegal = RSUDKotaTegalModel::select('*')
                    ->where('id', $id)
                    ->get();

        return view('ubahrsud_kota_tegal', ['rsud_kota_tegal' => $rsud_kota_tegal]);
    }

    public function updatersud_kota_tegal(Request $request)
    {
    $rsud_kota_tegal = RSUDKotaTegalModel::where('id', $request->id)
                ->update([
                        'gol_darah' => $request->gol_darah,
                        'jumlah' => $request->jumlah,
                ]);

    return redirect()->route('tampilrsud_kota_tegal');
    }

    public function hapusrsud_kota_tegal($id)
    {
        $rsud_kota_tegal = RSUDKotaTegalModel::where('id', $id)
                ->delete();

        return redirect()->route('tampilrsud_kota_tegal');
    }
}
