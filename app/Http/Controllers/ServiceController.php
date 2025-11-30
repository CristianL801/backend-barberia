<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return response()->json(Service::all(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'duracion' => 'required',
            'descripcion' => 'required',
        ]);

        $servicio = Service::create($request->only('nombre', 'precio', 'duracion', 'descripcion'));
        
        return response()->json($servicio, 201);
    }

    public function show($id)
    {
        $servicio = Service::find($id);
        
        if (!$servicio) {
            return response()->json(['message' => 'No encontrado'], 404);
        }
        
        return response()->json($servicio, 200);
    }

    public function update(Request $request, $id)
    {
        $servicio = Service::find($id);

        if (!$servicio) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        $request->validate([
            'nombre' => 'string',
            'precio' => 'string',
            'duracion' => 'string',
            'descripcion' => 'string',
        ]);

        $servicio->update($request->only('nombre', 'precio', 'duracion', 'descripcion'));
        
        return response()->json($servicio, 200);
    }

    public function destroy($id)
    {
        $servicio = Service::find($id);

        if ($servicio) {
            $servicio->delete();
            return response()->json(['message' => 'Eliminado correctamente'], 200);
        }
        
        return response()->json(['message' => 'No se encontró el servicio'], 404);
    }
}