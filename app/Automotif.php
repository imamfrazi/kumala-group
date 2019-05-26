<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automotif extends Model
{
    protected $fillable = [
        'nama', 'name', 'merek', 'quantity', 'brocure', 'deskripsi', 'desc', 'gambar',
        'gambar2', 'gambar3', 'price'
    ];
}
