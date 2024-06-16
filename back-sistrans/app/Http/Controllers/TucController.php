<?php

namespace App\Http\Controllers;

use App\Models\Tuc;
use Illuminate\Http\Request;

class TucController extends Controller
{

    public function index(Request $request)
    {
        return $this->generateViewSetList(
            $request,
            Tuc::query(),
            [],
            ['id'],
            ['id']
        );
    }

    public function store(Request $request)
    {
        return response(Tuc::create($request->all()), 201);
    }

    public function show(Tuc $tuc)
    {
        return response()->json($tuc);
    }

    public function update(Request $request, Tuc $tuc)
    {
        $tuc->update($request->all());
        return response()->json([$request, $tuc]);
    }

    public function destroy(Tuc $tuc)
    {
        return response()->json($tuc->delete());
    }
}
