<?php

namespace App\Http\Controllers;

use App\Models\Padron;
use Illuminate\Http\Request;

class PadronController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Padron::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Padron::create($request->all()), 201);
    }

    public function show(Padron $padron)
    {
        return response()->json($padron);
    }

    public function update(Request $request, Padron $padron)
    {
        $padron->update($request->all());
        return response()->json([$request, $padron]);
    }

    public function destroy(Padron $padron)
    {
        return response()->json($padron->delete());
    }
}
