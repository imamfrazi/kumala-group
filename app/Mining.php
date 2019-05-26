<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mining extends Model
{
    protected $fillable = [
        'nama', 'name', 'quantity', 'deskripsi', 'desc', 'gambar',
        'gambar2', 'gambar3', 'price'
    ];
}
