<?php

namespace App\Http\Controllers;

use App\Models\Multimedia;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $multimedia = Multimedia::all();
        $mult = $multimedia->toArray();
        return response()->json($mult);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // NO USAR
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // CEHCAR LUEGO
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mul = Multimedia::find($id);

        if (!$mul) {
            return response()->json(['message' => 'El archivo ya no se encunetra disponible',404]);
        }

        return response()->json($mul, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // NO USAR
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // checar luego
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mul = Multimedia::find($id);

        if (!$mul) {
            return response()->json(['message' => 'El archivo ya no se encunetra disponible',404]);
        }

        $mul->delete();

        return response()->json(['message' => 'El archivo fue eliminado con exito',404]);
    }
}
