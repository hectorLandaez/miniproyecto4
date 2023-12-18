<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;

class AsistenciaController extends Controller
{

    public function registrarAsistencia($alumnoId, $estado)
    {
       
        if (!in_array($estado, ['A', 'T', 'F'])) {
            return response()->json(['error' => 'Estado de asistencia no válido'], 400);
        }

        Asistencia::create([
            'alumno_id' => $alumnoId,
            'estado' => $estado,
            'fecha' => now(), 
        ]);

        return response()->json(['message' => 'Asistencia registrada con éxito'], 200);
    }


    public function obtenerAsistencia($alumnoId, $fechaInicio, $fechaFin)
    {
        $asistencia = Asistencia::where('alumno_id', $alumnoId)
            ->whereBetween('fecha', [$fechaInicio, $fechaFin])
            ->get();

        return response()->json($asistencia, 200);
    }

    
}
