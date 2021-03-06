<?php
namespace App\Domain\Repositories;

use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\Kamar;
use App\Domain\Repositories\AbstractRepository;

class KamarRepository extends AbstractRepository implements Crudable, Paginable
{
    public function __construct(Kamar $Kamar)
    {
        $this->model = $Kamar;
    }

    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function create(array $data)
    {
       return parent::create([
                'nomor' => e($data['nomor']),
                'nama' => e($data['nama']),
                'tipe' => e($data['tipe']),
                'fasilitas' => e($data['fasilitas']),

            ]
        );
      //  return redirect('/kamar');
    }

    public function update($id, array $data)
    {
       return parent::update($id, [
                'nomor' => e($data['nomor']),
                'nama' => e($data['nama']),
                'tipe' => e($data['tipe']),
                'fasilitas' => e($data['fasilitas']),
            ]
        );

      //  return redirect('/kamar');
    }

    public function delete($id)
    {
       return parent::delete($id);

     //   return redirect('/kamar');
    }

    public function search($query)
    {
        return parent::likeSearch('nomor', $query);

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
