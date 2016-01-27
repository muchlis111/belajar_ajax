<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model

{
    protected $table = 'pengunjung';

    protected $fillable = ['name', 'alamat', 'umur', 'jenis_kelamin', 'jenis_kamar'];


}

