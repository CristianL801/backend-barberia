<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return response()->json(Reservation::orderBy('id', 'desc')->get(), 200);
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'nombre_cliente' => 'required',
            'telefono' => 'required',
            'fecha_cita' => 'required',
            'servicio' => 'required',
            'comentarios' => 'nullable'
        ]);

        
        $reserva = Reservation::create($request->only('nombre_cliente', 'telefono', 'fecha_cita', 'servicio', 'comentarios'));

        return response()->json($reserva, 201);
    }

    public function show($id)
    {
        $reserva = Reservation::find($id);
        
        if (!$reserva) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json($reserva, 200);
    }

    public function update(Request $request, $id)
    {
        $reserva = Reservation::find($id);

        if (!$reserva) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        $request->validate([
            'nombre_cliente' => 'string',
            'telefono' => 'string',
            'fecha_cita' => 'string',
            'servicio' => 'string',
            'comentarios' => 'nullable|string',
        ]);

        $reserva->update($request->only('nombre_cliente', 'telefono', 'fecha_cita', 'servicio', 'comentarios'));
        
        return response()->json($reserva, 200);
    }

    public function destroy($id)
    {
        $reserva = Reservation::find($id);
        
        if ($reserva) {
            $reserva->delete();
            return response()->json(['message' => 'Eliminado correctamente'], 200);
        }

        return response()->json(['message' => 'No se encontró la reserva'], 404);
    }
}