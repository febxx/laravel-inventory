<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $table = 'barang_keluar';
    protected $fillable = ['barang_id', 'tanggal', 'jumlah_barang'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }
}
