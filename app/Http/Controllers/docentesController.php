<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docentes;

class docentesController extends Controller
{
    public function index()
    {
        $docentes = Docentes::all();
        return view('index', compact('docentes'));
    }

    public function show($id)
    {
        $docente = Docentes::findOrFail($id);
        return view('show', compact('usuario'));
    }

    public function create()
    {
        
        return view('create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required',
                'apellido' => 'required',
                'correo_electronico' => 'required|email|unique:usuarios',
            ]);
    
            Docentes::create($request->all());
    
            return response()->json(['message' => 'docente  creado con éxito'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        $usuario = Docentes::findOrFail($id);
        return view('edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email|unique:usuarios,correo_electronico,' . $id,
        ]);

        $docente = Docentes::findOrFail($id);
        $docente->update($request->all());

        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
        $docente = Docentes::findOrFail($id);
        $docente->delete();

        return redirect()->route('usuarios.index');
    }
}