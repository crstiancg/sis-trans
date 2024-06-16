<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    
    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Empresa::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Empresa::create($request->all()), 201);
    }

    public function show(Empresa $empresa)
    {
        return response()->json($empresa);
    }
   
    public function update(Request $request, Empresa $empresa)
    {
        $empresa->update($request->all());
        return response()->json([$request, $empresa]);
    }
 
    public function destroy(Empresa $empresa)
    {
        return response()->json($empresa->delete());
    }
}
