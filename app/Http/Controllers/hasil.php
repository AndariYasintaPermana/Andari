<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Input;

class hasil extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $form = Input::all();
        return view('hasil',compact('form'));
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
        //
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
        $form = Input::where('kb', $id)->get();
        return view('edit_product',compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data([
            'kb' => $request->kb,
            'nama' => $request->nama,
            'jv' => $request->jv,
            'qty' => $request->qty,
            'hj' => $request->hj,
            'HargaPembelian' => $nilai_total,
            'Diskon' => $diskon,
            'JumlahPembayaran' => $jumlah_pembayaran
        ]);
        $proses = Input::find($data[0])->update($data);

        return view('hasil',compact('form'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //$form = Input::where('id', $id)->delete();
        //return redirect('hasil/inputan');
    }
}
