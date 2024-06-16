<?php

namespace App\Http\Controllers;

use App\Models\Infraccion;
use Illuminate\Http\Request;

class InfraccionController extends Controller
{
    
    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Infraccion::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Infraccion::create($request->all()), 201);
    }

    public function show(Infraccion $infraccion)
    {
        return response()->json($infraccion);
    }

    public function update(Request $request, Infraccion $infraccion)
    {
        $infraccion->update($request->all());
        return response()->json([$request, $infraccion]);
    }

    public function destroy(Infraccion $infraccion)
    {
        return response()->json($infraccion->delete());
    }
}
