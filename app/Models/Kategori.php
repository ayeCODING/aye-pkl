<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kategori', 'deskripsi', 'gambar'];
    protected $visible = ['nama_kategori', 'deskripsi', 'gambar'];

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/kategori' . $this->gambar))) {
            return unlink(public_path('images/kategori' . $this->gambar));
        }
    }

    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
