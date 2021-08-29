<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriBerita extends Model
{
    use HasFactory;

    public function berita()
    {
        return $this->hasMany('App\Models\berita');
    }

    protected $fillable = [
        'nama_kategori_berita',
    ];
}
