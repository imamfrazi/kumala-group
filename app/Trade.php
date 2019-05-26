<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'nama', 'name', 'type', 'quantity', 'deskripsi', 'desc', 'gambar',
        'gambar2', 'gambar3', 'price'
    ];
}
