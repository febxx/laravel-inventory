<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use PDF;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        Barang::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
        ]);

        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }
    public function update(Request $request, $id)
    {
        Barang::whereId($id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
        ]);

        return redirect('/barang');
    }

    public function destroy($id)
    {
       $barang = Barang::whereId($id)->delete();

       return redirect('/barang');
    }

    public function cetak_pdf()
    {
        $barang = Barang::all();
        $pdf = PDF::loadview('barang.cetak_pdf',['barang'=>$barang]);
    	return $pdf->download('barang-pdf.pdf');
    }
}
