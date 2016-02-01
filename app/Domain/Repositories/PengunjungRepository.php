<?php
namespace App\Domain\Repositories;

use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\Pengunjung;
use App\Domain\Repositories\AbstractRepository;

class PengunjungRepository extends AbstractRepository implements Crudable, Paginable
{
    public function __construct(Pengunjung $pengunjung)
    {
        $this->model = $pengunjung;
    }

    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function create(array $data)
    {
      return  parent::create([
                'name' => e($data['name']),
                'alamat' => e($data['alamat']),
                'umur' => e($data['umur']),
                'jenis_kelamin' => e($data['jenis_kelamin']),
                'jenis_kamar' => e($data['jenis_kamar']),
            ]
        );
//        return redirect('/pengunjung');
    }

    public function update($id, array $data)
    {
       return parent::update($id, [
                'name' => e($data['name']),
                'alamat' => e($data['alamat']),
                'umur' => e($data['umur']),
                'jenis_kelamin' => e($data['jenis_kelamin']),
                'jenis_kamar' => e($data['jenis_kamar']),
            ]
        );

//        return redirect('/pengunjung');
    }

    public function delete($id)
    {
        return parent::delete($id);

//        return redirect('/pengunjung');
    }

    public function search($query)
    {
       return parent::likeSearch('name', $query);

    }

    public function getByPage($limit = 10, array $columns = ['*'])
    {
        return parent::getByPage($limit, $columns);
    }
    public  function getData()
    {
        $data = $this->model
            ->get();
        return $data;
    }

}