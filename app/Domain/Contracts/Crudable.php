<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 26/01/2016
 * Time: 13:59
 */

namespace app\Domain\Contracts;

interface crudable
{
    public function  find($id, array $columns = []);
    public function  create(array $data);
    public function  update($id, array $data);
    public function  delete($id);
}