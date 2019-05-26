<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Come extends Model
{
    protected $fillable = [
        'email', 'nama', 'hp', 'kota', 'rencana',
        'mobil', 'dealer', 'verify'
    ];
}
