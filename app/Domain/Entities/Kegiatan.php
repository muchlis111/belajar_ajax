<?php
/**
 * Created by PhpStorm.
 * User: - INDIEGLO -
 * Date: 23/08/2015
 * Time: 23:56
 */
namespace App\Domain\Entities;
use Illuminate\Database\Eloquent\Model;
class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['program_id', 'kode_kegiatan', 'kegiatan'];
}