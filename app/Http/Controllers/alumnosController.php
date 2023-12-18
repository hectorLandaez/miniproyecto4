<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnos;

class alumnosController extends Controller
{
    public function index()
    {
        return Alumnos::all();
    }

    public function show($id)
    {
        return Alumnos::findOrFail($id);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required',
                'apellido' => 'required',
                'correo_electronico' => 'required|email|unique:usuarios',
            ]);
    
            Alumnos::create($request->all());
    
            return response()->json(['message' => 'Alumno creado con éxito'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        $alumno = Alumnos::findOrFail($id);
        return view('edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email|unique:alumnos,correo_electronico,' . $id,
        ]);
    
        $alumno = Alumnos::findOrFail($id);
        $alumno->update($request->all());
    
        return response()->json(['message' => 'Alumno actualizado ', 'alumno' => $alumno], 200);
    }
    public function destroy($id)
    {
        $alumno = Alumnos::findOrFail($id);
        $alumno->delete();

    }
    public function mostrarCookies(Request $request)
{
    $cookies = $request->cookies->all();

    return response()->json($cookies);
}
}
