<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'deskripsi', 'harga', 'stok', 'id_kategori', 'gambar'];
    protected $visible = ['nama_produk', 'deskripsi', 'harga', 'stok', 'id_kategori', 'gambar'];


    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/produk' . $this->gambar))) {
            return unlink(public_path('images/produk' . $this->gambar));
        }
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
