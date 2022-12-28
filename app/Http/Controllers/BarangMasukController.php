<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangMasuk;
use PDF;

class BarangMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barang = BarangMasuk::all();
        return view('barang_masuk.index', compact('barang'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('barang_masuk.create', compact('barang'));
    }

    public function store(Request $request)
    {
        BarangMasuk::create([
            'barang_id' => $request->barang_id,
            'tanggal' => $request->tanggal,
            'jumlah_barang' => $request->jumlah_barang,
        ]);

        $barang = Barang::find($request->barang_id);
        $barang->stok += $request->jumlah_barang;
        $barang->save();
        return redirect('/barang_masuk');
    }

    public function destroy($id)
    {
        $barang_masuk = BarangMasuk::find($id);
        $barang = Barang::find($barang_masuk->barang_id);
        $barang->stok -= $barang_masuk->jumlah_barang;
        $barang->save();
        $barang_masuk->delete();
        return redirect('/barang_masuk');
    }

    public function cetak_pdf()
    {
        $barang = BarangMasuk::all();
        $pdf = PDF::loadview('barang_masuk.cetak_pdf',['barang'=>$barang]);
    	return $pdf->download('barang-masuk-pdf.pdf');
    }
}
