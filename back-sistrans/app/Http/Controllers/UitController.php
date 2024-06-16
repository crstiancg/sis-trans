<?php

namespace App\Http\Controllers;

use App\Models\Uit;
use Illuminate\Http\Request;

class UitController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Uit::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Uit::create($request->all()), 201);
    }

    public function show(Uit $uit)
    {
        return response()->json($uit);
    }

    public function update(Request $request, Uit $uit)
    {
        $uit->update($request->all());
        return response()->json([$request, $uit]);
    }

    public function destroy(Uit $uit)
    {
        return response()->json($uit->delete());
    }
}
