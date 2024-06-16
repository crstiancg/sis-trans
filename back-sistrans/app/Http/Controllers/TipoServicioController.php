<?php

namespace App\Http\Controllers;

use App\Models\TipoServicio;
use Illuminate\Http\Request;

class TipoServicioController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            TipoServicio::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(TipoServicio::create($request->all()), 201);
    }

    public function show(TipoServicio $tipoServicio)
    {
        return response()->json($tipoServicio);
    }

    public function update(Request $request, TipoServicio $tipoServicio)
    {
        $tipoServicio->update($request->all());
        return response()->json([$request, $tipoServicio]);
    }

    public function destroy(TipoServicio $tipoServicio)
    {
        return response()->json($tipoServicio->delete());
    }
}
