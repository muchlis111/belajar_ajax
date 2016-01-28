<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model

{
    protected $table = 'kamar';

    protected $fillable = ['nomor', 'nama', 'tipe', 'fasilitas'];


}
