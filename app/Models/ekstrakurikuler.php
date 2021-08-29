<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    public function ekstrakurikuler()
    {
        return $this->hasMany('App\Models\ekstrakurikuler');
    }

    protected $fillable = [
        'nama_ekstrakurikuler',
    ];
}
