<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Lama_hari extends Model

{
    protected $table = 'lama_hari';

    protected $fillable = ['pengunjung', 'kamar', 'lama_hari'];

    protected $with = ['pengunjung','kamar']; public function pengunjung()
{
    return $this->belongsTo('App\Domain\Entities\Pengunjung', 'pengunjung');
}
    public function kamar()
    {
        return $this->belongsTo('App\Domain\Entities\kamar', 'kamar');
    }



}
