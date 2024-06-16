<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Vehiculo::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Vehiculo::create($request->all()), 201);
    }

    public function show(Vehiculo $vehiculo)
    {
        return response()->json($vehiculo);
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $vehiculo->update($request->all());
        return response()->json([$request, $vehiculo]);
    }

    public function destroy(Vehiculo $vehiculo)
    {
        return response()->json($vehiculo->delete());
    }
}
