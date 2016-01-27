<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26/01/2016
 * Time: 13:59
 */
namespace App\Domain\Contracts;
interface Paginable
{
    public function getByPage($limit = 10);
}