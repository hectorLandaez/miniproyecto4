<?php

namespace App\Http\Controllers;

use App\Models\Clases;
use Illuminate\Http\Request;

class clasesController extends Controller
{
    public function index()
    {
        $Clases = Clases::all();
        return $Clases;
    }

    public function show($id)
    {
        $Clase = Clases::findOrFail($id);
        return $Clase;
    }

    public function store(Request $request)
    {
        $request->validate([
            'materia' => 'required',
            'idEstudiante' => 'required',
            'asistio' => 'required',
        ]);

        try {
            $clase = Clases::create($request->all());

            return response()->json($clase, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear la persona'], 500);
        }
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'materia' => 'required',
            'idEstudiante' => 'required',
            'asistio' => 'required',
        ]);

        $Clase = Clases::findOrFail($id);
        $Clase->update($request->all());
    }

    public function destroy($id)
    {
        $Clase = Clases::findOrFail($id);
        $Clase->delete();
    }
}
