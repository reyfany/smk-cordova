<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_berita',
        'foto_berita',
        'id_kategori_berita',
        'isi_berita',
    ];

    public function kategoriBerita()
    {
        return $this->belongsTo('App\Models\kategoriBerita');
    }
}
