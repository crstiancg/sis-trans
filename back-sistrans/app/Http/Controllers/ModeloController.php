<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Modelo::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Modelo::create($request->all()), 201);
    }

    public function show(Modelo $modelo)
    {
        return response()->json($modelo);
    }

    public function update(Request $request, Modelo $modelo)
    {
        $modelo->update($request->all());
        return response()->json([$request, $modelo]);
    }

    public function destroy(Modelo $modelo)
    {
        return response()->json($modelo->delete());
    }
}
