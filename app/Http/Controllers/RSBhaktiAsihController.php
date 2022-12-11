<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RSBhaktiAsihModel;

class RSBhaktiAsihController extends Controller
{
    public function tampilrs_bhakti_asih()
    {
        $rs_bhakti_asih = RSBhaktiAsihModel::select('*')
             ->get();
        return view('tampilrs_bhakti_asih', ['rs_bhakti_asih' => $rs_bhakti_asih]);
    }

    public function umum_tampilrs_bhakti_asih()
    {
        $rs_bhakti_asih = RSBhaktiAsihModel::select('*')
             ->get();
        return view('umum_tampilrs_bhakti_asih', ['rs_bhakti_asih' => $rs_bhakti_asih]);
    }

    public function tambahrs_bhakti_asih()
    {
        return view('tambahrs_bhakti_asih');
    }

    public function simpanrs_bhakti_asih(Request $request)
    {
        $rs_bhakti_asih = RSBhaktiAsihModel::create([
            'gol_darah' => $request->gol_darah,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('tampilrs_bhakti_asih');
    }

    public function ubahrs_bhakti_asih($id)
    {
        $rs_bhakti_asih = RSBhaktiAsihModel::select('*')
                    ->where('id', $id)
                    ->get();

        return view('ubahrs_bhakti_asih', ['rs_bhakti_asih' => $rs_bhakti_asih]);
    }

    public function updaters_bhakti_asih(Request $request)
    {
    $rs_bhakti_asih = RSBhaktiAsihModel::where('id', $request->id)
                ->update([
                        'gol_darah' => $request->gol_darah,
                        'jumlah' => $request->jumlah,
                ]);

    return redirect()->route('tampilrs_bhakti_asih');
    }

    public function hapusrs_bhakti_asih($id)
    {
        $rs_bhakti_asih = RSBhaktiAsihModel::where('id', $id)
                ->delete();

        return redirect()->route('tampilrs_bhakti_asih');
    }
}
