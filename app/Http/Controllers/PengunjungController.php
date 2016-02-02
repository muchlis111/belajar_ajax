<?php
namespace App\Http\Controllers;

use App\Domain\Repositories\pengunjungRepository;
use Illuminate\Http\Request;
use app\Http\Requests;

class pengunjungController extends Controller
{
    protected $pengunjung;

    public function __construct(pengunjungRepository $pengunjungRepository)
    {
        $this->pengunjung = $pengunjungRepository;
    }

    public function show($id)
    {
//        return view('partials.pengunjung.detail', [
//            'pengunjung' => $this->pengunjung->find($id),
//        ]);
        return $this->pengunjung->find($id);
    }

    public function edit($id)
    {
        return view('partials.pengunjung.edit', [
            'pengunjung' => $this->pengunjung->find($id),
        ]);
    }

    public function index($limit = 10)
    {
        return view('partials.pengunjung.index', [
            'pengunjung' => $this->pengunjung->getByPage($limit),
        ]);
    }

    public function getData($limit = 10)
    {
        return $this->pengunjung->getData();
    }

    public function store(Request $request)
    {
        return $this->pengunjung->create($request->all());
    }

    public function update($id, Request $request)
    {
//        return $this->pengunjung->update($id, $request->all());
        return $id;
    }

    public function destroy($id)
    {
        return $this->pengunjung->delete($id);
    }
}