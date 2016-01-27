<?php
namespace App\Domain\Entities;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';

    protected $fullable =['name', 'alamat', 'umur', 'jenis_kelamin', 'jenis_kamar'];


}
