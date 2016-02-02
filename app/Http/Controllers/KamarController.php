<?php
namespace App\Http\Controllers;

use App\Domain\Repositories\KamarRepository;
use Illuminate\Http\Request;
use app\Http\Requests;

class KamarController extends Controller
{
    protected $kamar;

    public function __construct(KamarRepository $kamarRepository)
    {
        $this->kamar = $kamarRepository;
    }

    public function getData($limit = 10)
    {
        return $this->kamar->getData();
    }


    public function show($id)
    {
//        return view('partials.kamar.detail', [
//            'kamar' => $this->kamar->find($id),
//        ]);
        return $this->kamar->find($id);
    }
    public function edit($id)
    {
        return view('partials.kamar.edit', [
            'kamar' => $this->kamar->find($id),
        ]);
    }

    public function index($limit = 10)
    {
        return view('partials.kamar.index', [
            'kamar' => $this->kamar->getByPage(),
        ]);
    }

    public function store(Request $request)
    {
        return $this->kamar->create($request->all());
    }

    public function update($id, Request $request)
    {
        return $this->kamar->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->kamar->delete($id);
    }
}