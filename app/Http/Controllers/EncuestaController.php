<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuesta;

class EncuestaController extends Controller
{
    public function guardar(Request $request)
    {
        // Valida los datos del formulario (si es necesario)

        // Crea una nueva instancia del modelo Encuesta con los datos del formulario
        $encuesta = new Encuesta();
        $encuesta->festejas = $request->festejas;
        $encuesta->porque = $request->porque;
        
        // Guarda la nueva encuesta en la base de datos
        if ($encuesta->save()) {
            return 'Datos guardados con éxito.';
        } else {
            return 'Error al guardar los datos.';
        }
    }
}
