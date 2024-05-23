<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function index()
    {
        return view('dashboard\sparepart\index', [
            'barangs' => Barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.sparepart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
        ]);

        Barang::create($validatedData);

        return redirect ('/dashboard/sparepart')->with('success', 'New Data Sparepart added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view ('dashboard.sparepart.show', [
            'barang' => $barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('dashboard.sparepart.edit', compact(['barang']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        $rules = ([
            'nama_barang' => '',
            'harga' => '',
        ]);

        $validatedData = $request->validate($rules);


        Barang::where('id', $barang->id)
            ->update($validatedData);

        
        return redirect ('/dashboard/sparepart')->with('success', 'Data Sparepart has been Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::destroy($id);

        return redirect ('/dashboard/sparepart')->with('success', 'Sparepart has been deleted!');
    }
}
