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
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email|unique:usuarios',
            'password'=> 'required'
        ]);

        Alumnos::create($request->all());
        
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
            'correo_electronico' => 'required|email|unique:usuarios,correo_electronico,' . $id,
        ]);

        $alumno = Alumnos::findOrFail($id);
        $alumno->update($request->all());

    }

    public function destroy($id)
    {
        $alumno = Alumnos::findOrFail($id);
        $alumno->delete();

    }
}
