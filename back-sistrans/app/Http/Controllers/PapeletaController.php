<?php

namespace App\Http\Controllers;

use App\Models\Papeleta;
use Illuminate\Http\Request;

class PapeletaController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Papeleta::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Papeleta::create($request->all()), 201);
    }

    public function show(Papeleta $papeleta)
    {
        return response()->json($papeleta);
    }

    public function update(Request $request, Papeleta $papeleta)
    {
        $papeleta->update($request->all());
        return response()->json([$request, $papeleta]);
    }

    public function destroy(Papeleta $papeleta)
    {
        return response()->json($papeleta->delete());
    }
}
