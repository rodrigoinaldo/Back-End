<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HorariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('admin');

        try{
            try{
                $dados =  Horarios::all();

                if($dados->isEmpty()) {
                    return response()->json(['message' => 'Nenhum horário encontrado.'], 404);
                }

                $user = auth()->user();

                Log::info('O usuario '. $user->id .' buscou os horários' );
                return response()->json($dados, 200);

            } catch (\Exception $e) {
                Log::error('Erro ao buscar horários: ' . $e->getMessage());
                return response()->json(['error' => 'Erro ao buscar horários: ' . $e->getMessage()], 500);
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('admin');

        try {
            $validatedData = $request->validate([
                'date' => 'required|date',
                'time' => 'required|date_format:H:i',
            ]);

            $horario = Horarios::create($validatedData);

            $user = auth()->user();
            Log::info('O usuario '. $user->id .' criou o horário com id: ' . $horario->id );

            return response()->json($horario, 201);
        } catch (\Exception $e) {
            Log::error('Erro ao criar horário: ' . $e->getMessage());
            return response()->json(['error' => 'Erro ao criar horário: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Horarios $horarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horarios $horarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horarios $horarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horarios $horarios)
    {
        //
    }
}
