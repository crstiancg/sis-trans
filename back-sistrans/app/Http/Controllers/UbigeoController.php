<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUbigeoRequest;
use App\Models\Ubigeo;
use Illuminate\Http\Request;

class UbigeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        return $this->generateViewSetList(
            $request,
            Ubigeo::query(),
            [],
            ['id', 'nombre'],
            ['id', 'nombre','codigo']
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUbigeoRequest $request)
    {
        return response(Ubigeo::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ubigeo $ubigeo)
    {
        return response()->json($ubigeo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUbigeoRequest $request, Ubigeo $ubigeo)
    {
        $ubigeo->update($request->all());
        // Permission::find($id)->update($request->all());
        return response()->json([$request, $ubigeo]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ubigeo $ubigeo)
    {
        return response()->json($ubigeo->delete());
    }
}
