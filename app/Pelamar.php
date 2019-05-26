<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $fillable = [
        'email', 'nama', 'hp', 'alamat', 'foto',
        'cv', 'pelamar', 'verify'
    ];
}
