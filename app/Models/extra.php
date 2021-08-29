<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extra extends Model
{
    use HasFactory;

     protected $fillable = [
        'nama_foto',
        'image',
        'id_kategori',
        'deskripsi',
    ];

    public function kategori()
    {
        return $this->belongsTo('App\Models\kategori');
    }
    // function kategorigaleri() {
    //     return $this->hasOne('App\Models\kategori', 'id_kategori', 'nama_kategori');
    // }

    public function image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image))) {
            return asset('images/post/' . $this->image);
        } else {
            return asset('images/no_image.png');
        }

    }

    public function delete_image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image))) {
            return unlink(public_path('images/post/' . $this->image));
        }

    }
}
