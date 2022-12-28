<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangKeluar;
use PDF;
class BarangKeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barang = BarangKeluar::all();
        return view('barang_keluar.index', compact('barang'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('barang_keluar.create', compact('barang'));
    }

    public function store(Request $request)
    {
        BarangKeluar::create([
            'barang_id' => $request->barang_id,
            'tanggal' => $request->tanggal,
            'jumlah_barang' => $request->jumlah_barang,
        ]);

        $barang = Barang::find($request->barang_id);
        $barang->stok -= $request->jumlah_barang;
        $barang->save();
        return redirect('/barang_keluar');
    }

    public function destroy($id)
    {
        $barang_keluar = BarangKeluar::find($id);
        $barang = Barang::find($barang_keluar->barang_id);
        $barang->stok += $barang_keluar->jumlah_barang;
        $barang->save();
        $barang_keluar->delete();
        return redirect('/barang_keluar');
    }

    public function cetak_pdf()
    {
        $barang = BarangKeluar::all();
        $pdf = PDF::loadview('barang_keluar.cetak_pdf',['barang'=>$barang]);
    	return $pdf->download('barang-keluar-pdf.pdf');
    }
}
