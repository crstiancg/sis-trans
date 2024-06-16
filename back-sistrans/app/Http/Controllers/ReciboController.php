<?php

namespace App\Http\Controllers;

use App\Models\Recibo;
use Illuminate\Http\Request;

class ReciboController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Recibo::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Recibo::create($request->all()), 201);
    }

    public function show(Recibo $recibo)
    {
        return response()->json($recibo);
    }

    public function update(Request $request, Recibo $recibo)
    {
        $recibo->update($request->all());
        return response()->json([$request, $recibo]);
    }

    public function destroy(Recibo $recibo)
    {
        return response()->json($recibo->delete());
    }
}
