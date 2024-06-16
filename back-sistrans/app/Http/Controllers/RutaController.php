<?php

namespace App\Http\Controllers;

use App\Models\Ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Ruta::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Ruta::create($request->all()), 201);
    }

    public function show(Ruta $ruta)
    {
        return response()->json($ruta);
    }

    public function update(Request $request, Ruta $ruta)
    {
        $ruta->update($request->all());
        return response()->json([$request, $ruta]);
    }

    public function destroy(Ruta $ruta)
    {
        return response()->json($ruta->delete());
    }
}
