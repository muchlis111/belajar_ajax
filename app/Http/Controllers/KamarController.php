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

    public function show($id)
    {
        return view('partials.kamar.detail', [
            'kamar' => $this->kamar->find($id),
        ]);
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
            'kamar' => $this->kamar->getByPage($limit),
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