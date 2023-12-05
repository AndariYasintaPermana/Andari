<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;

class form extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ("form");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kodebarang = $request->input("kb");
        $namabarang = $request->input("nama");
        $jenisvarian = $request->input("jv");
        $quality = $request->input("qty");
        $hargajual = $request->input("hj");

        $nilai_total = $hargajual * $quality;

        function hitung($nilai_total){
        if ($nilai_total >= 500000){
            $diskon = 0.5;
        } elseif ($nilai_total >= 200000){
            $diskon = 0.2;
        } elseif ($nilai_total >= 100000){
            $diskon = 0.1;
        } else {
            $diskon = 0;
        }
        return $diskon;
        }

        function total($nilai_total, $quality, $diskon){
        $jumlah = $nilai_total - ($nilai_total * $diskon);
        return $jumlah;
        }

        echo "INPUTAN DATA <br>";
        echo "Kode Barang: ".$kodebarang."<br>";
        echo "Nama Barang: ".$namabarang."<br>";
        echo "Jenis Varian: ".$jenisvarian."<br>";
        echo "Quality: ".$quality."<br>";
        echo "Harga Jual: ".$hargajual."<br>";
        echo "Harga Pembelian: ".$nilai_total."<br>";

        $diskon = hitung($nilai_total);
        echo "Diskon: ".$diskon."<br>";

        $jumlah_pembayaran = total($nilai_total, $quality, $diskon);
        echo "Jumlah Pembayaran: ".$jumlah_pembayaran."<br>";

        input::create([
            'kb' => $request->kb,
            'nama' => $request->nama,
            'jv' => $request->jv,
            'qty' => $request->qty,
            'hj' => $request->hj,
            'HargaPembelian' => $nilai_total,
            'Diskon' => $diskon,
            'JumlahPembayaran' => $jumlah_pembayaran
        ]);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
