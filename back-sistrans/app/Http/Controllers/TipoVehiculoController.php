<?php

namespace App\Http\Controllers;

use App\Models\TipoVehiculo;
use Illuminate\Http\Request;

class TipoVehiculoController extends Controller
{
    
    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            TipoVehiculo::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(TipoVehiculo::create($request->all()), 201);
    }

    public function show(TipoVehiculo $tipoVehiculo)
    {
        return response()->json($tipoVehiculo);
    }

    public function update(Request $request, TipoVehiculo $tipoVehiculo)
    {
        $tipoVehiculo->update($request->all());
        return response()->json([$request, $tipoVehiculo]);
    }

    public function destroy(TipoVehiculo $tipoVehiculo)
    {
        return response()->json($tipoVehiculo->delete());
    }
}
