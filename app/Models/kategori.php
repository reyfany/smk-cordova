<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    public function galeri()
    {
        return $this->hasMany('App\Models\galeri');
    }

    protected $fillable = [
        'nama_kategori',
    ];
}
