<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'nama', 'name', 'merek', 'quantity', 'deskripsi', 'desc', 'gambar',
        'gambar2', 'gambar3', 'price'
    ];
}
