<?php

namespace App\Http\Controllers;

use App\Models\TipoCarroceria;
use Illuminate\Http\Request;

class TipoCarroceriaController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            TipoCarroceria::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(TipoCarroceria::create($request->all()), 201);
    }

    public function show(TipoCarroceria $tipoCarroceria)
    {
        return response()->json($tipoCarroceria);
    }

    public function update(Request $request, TipoCarroceria $tipoCarroceria)
    {
        $tipoCarroceria->update($request->all());
        return response()->json([$request, $tipoCarroceria]);
    }

    public function destroy(TipoCarroceria $tipoCarroceria)
    {
        return response()->json($tipoCarroceria->delete());
    }
}
