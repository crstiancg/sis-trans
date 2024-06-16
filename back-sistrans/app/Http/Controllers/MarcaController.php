<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    
    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Marca::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Marca::create($request->all()), 201);
    }

    public function show(Marca $marca)
    {
        return response()->json($marca);
    }

    public function update(Request $request, Marca $marca)
    {
        $marca->update($request->all());
        return response()->json([$request, $marca]);
    }

    public function destroy(Marca $marca)
    {
        return response()->json($marca->delete());
    }
}
