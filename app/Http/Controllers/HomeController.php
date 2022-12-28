<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barang = Barang::all()->count();
        $user = User::all()->count();
        $barang_masuk = BarangMasuk::where('tanggal', Carbon::today())->get()->count();
        $barang_keluar = BarangKeluar::where('tanggal', Carbon::today())->get()->count();
        return view('home', compact('barang', 'user', 'barang_masuk', 'barang_keluar'));
    }
}
