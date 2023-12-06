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
        $form = Input::find($id)->get();
        return view('edit_product',compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data=[
            'kb' => $request->kb,
            'nama' => $request->nama,
            'jv' => $request->jv,
            'qty' => $request->qty,
            'hj' => $request->hj,
            'HargaPembelian' => $request->nilai_total,
            'Diskon' => $request->diskon,
            'JumlahPembayaran' => $request->jumlah
        ];
        
        $proses = Input::find($id)->update($data);
        return redirect('/view')->with('success','Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Input::find($id)->delete();
        return redirect('/view')->with('success','Data berhasil disimpan');
    }
}
