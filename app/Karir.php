<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    protected $fillable = [
        'position', 'jumlah', 'deskripsi', 'desc'
    ];
}
