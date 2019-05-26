<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul', 'heading', 'type', 'deskripsi', 'desc', 'gambar'
    ];
}
