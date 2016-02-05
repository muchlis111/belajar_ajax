<?php
namespace App\Http\Controllers;

use App\Domain\Repositories\Lama_hariRepository;
use Illuminate\Http\Request;
use app\Http\Requests;

class Lama_hariController extends Controller
{
    protected $Lama_hari;

    public function __construct(Lama_hariRepository $lama_hariRepository)
    {
        $this->lama_hari = $lama_hariRepository;
    }

    public function getData($limit = 10)
    {
        return $this->lama_hari->getData();
    }


    public function show($id)
    {
//        return view('partials.lama_hari.detail', [
//            'lama_hari' => $this->lama_hari->find($id),
//        ]);
        return $this->lama_hari->find($id);
    }
    public function edit($id)
    {
        return view('partials.lama_hari.edit', [
            'lama_hari' => $this->lama_hari->find($id),
        ]);
    }

    public function index($limit = 10)
    {
        return view('partials.lama_hari.index', [
            'lama_hari' => $this->lama_hari->getByPage(),
        ]);
    }

    public function store(Request $request)
    {
        return $this->lama_hari->create($request->all());
    }

    public function update($id, Request $request)
    {
        return $this->lama_hari->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->lama_hari->delete($id);
    }
}