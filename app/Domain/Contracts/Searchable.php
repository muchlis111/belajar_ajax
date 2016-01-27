<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26/01/2016
 * Time: 14:00
 */
namespace App\Domain\Contracts;
interface searchable
{
    public  function  search($query);
}