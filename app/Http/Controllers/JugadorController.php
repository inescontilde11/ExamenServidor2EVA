<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use App\Http\Requests\StoreJugadorRequest;
use App\Http\Requests\UpdateJugadorRequest;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugador::all();
        return view("jugadores.jugador", compact("jugadores"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("jugadores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJugadorRequest $request)
    {
        $datos = $request->input();
        $jugador = new Jugador($datos);
        $jugador->save();
        $jugadores = Jugador::all();
        return view("jugadores.jugador",compact("jugadores"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $dni)
    {
        $jugador = Jugador::findDni($dni);
        return view("jugadores.edit", compact("jugador"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJugadorRequest $request, string $dni)
    {
        $jugador = Jugador::findDni($dni);
        $jugador->setKeyName("dni");
        $jugador->update($request->input());
        $jugadores = Jugador::all();
        return view("jugadores.jugador", compact("jugadores"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $dni)
    {
        $jugador = Jugador::findDni($dni);
        $jugador->setKeyName("dni");
        $jugador->delete();
        $jugadores = Jugador::all();
        return view("jugadores.jugador", compact("jugadores"));
    }
}
