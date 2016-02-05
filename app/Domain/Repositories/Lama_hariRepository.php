<?php
namespace App\Domain\Repositories;

use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Entities\lama_hari;
use App\Domain\Repositories\AbstractRepository;

class Lama_hariRepository extends AbstractRepository implements Crudable, Paginable
{
    public function __construct(Lama_hari $Lama_hari)
    {
        $this->model = $Lama_hari;
    }

    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    public function create(array $data)
    {
        return parent::create([
                'pengunjung' => e($data['pengunjung']),
                'kamar' => e($data['kamar']),
                'lama_hari' => e($data['lama_hari']),


            ]
        );
        //  return redirect('/lama_hari');
    }

    public function update($id, array $data)
    {
        return parent::update($id, [
                'pengunjung' => e($data['pengunjung']),
                'kamar' => e($data['kamar']),
                'lama_hari' => e($data['lama_hari']),

            ]
        );

        //  return redirect('/lama_hari');
    }

    public function delete($id)
    {
        return parent::delete($id);

        //   return redirect('/lama_hari');
    }

    public function search($query)
    {
        return parent::likeSearch('pengunjung', $query);

    }

    public function getByPage($limit = 10, array $columns = ['*'])
    {
        return parent::getByPage($limit, $columns);
    }

    public function getData()
    {
        $data = $this->model->get();
        return $data;
    }

}
