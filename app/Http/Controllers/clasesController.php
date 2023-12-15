<?php

namespace App\Http\Controllers;
use App\Models\Clases;
use Illuminate\Http\Request;

class clasesController extends Controller
{
    public function index()
    {
        $Clases = Clases::all();
        return view('index', compact('docentes'));
    }

    public function show($id)
    {
        $Clase = Clases::findOrFail($id);
        return view('show', compact('usuario'));
    }

    public function create()
    {
        
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email|unique:usuarios',
            'password'=> 'required'
        ]);

        Clases::create($request->all());

        return redirect()->route('/');
    }

    public function edit($id)
    {
        $Clase = Clases::findOrFail($id);
        return view('edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo_electronico' => 'required|email|unique:usuarios,correo_electronico,' . $id,
        ]);

        $Clase = Clases::findOrFail($id);
        $Clase->update($request->all());

        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
        $Clase = Clases::findOrFail($id);
        $Clase->delete();

        return redirect()->route('usuarios.index');
    }
}
