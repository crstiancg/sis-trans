<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    
    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Propietario::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Propietario::create($request->all()), 201);
    }

    public function show(Propietario $propietario)
    {
        return response()->json($propietario);
    }

    public function update(Request $request, Propietario $propietario)
    {
        $propietario->update($request->all());
        return response()->json([$request, $propietario]);
    }

    public function destroy(Propietario $propietario)
    {
        return response()->json($propietario->delete());
    }
}
