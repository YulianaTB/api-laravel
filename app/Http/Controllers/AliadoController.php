<?php

namespace App\Http\Controllers;

use App\Models\Aliado;
use Illuminate\Http\Request;

class AliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Aliado::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'documento' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'comercio' => 'required',
            'correo' => 'required'

        ]);

        $aliado = new Aliado;
        $aliado->documento = $request->documento; //campo de la base de datos = la respuesta que ingresemos
        $aliado->nombre = $request->nombre;
        $aliado->telefono = $request->telefono;
        $aliado->comercio = $request->comercio;
        $aliado->correo = $request->correo;
        $aliado->save();

        return $aliado;

    }

    /**
     * Display the specified resource.
     */
    public function show(Aliado $aliado)
    {
        return $aliado;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aliado $aliado)
    {
        $request->validate([
            'documento' => 'required',
            'nombre' => 'required',
            'telefono' => 'required',
            'comercio' => 'required',
            'correo' => 'required'

        ]);

       
        $aliado->documento = $request->documento; //campo de la base de datos = la respuesta que ingresemos
        $aliado->nombre = $request->nombre;
        $aliado->telefono = $request->telefono;
        $aliado->comercio = $request->comercio;
        $aliado->correo = $request->correo;
        $aliado->update();

        return $aliado;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aliado $aliado)
    {
        $aliado->delete();
        return [];
    }
}
