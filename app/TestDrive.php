<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestDrive extends Model
{
    protected $fillable = [
        'email', 'nama', 'jk', 'hp', 'kota', 'alamat',
        'daerah', 'dealer', 'verify'
    ];
}
