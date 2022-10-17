<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tiponotificacione;
use Illuminate\Http\Request;

class TiponotificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiponotificaciones=Tiponotificacione::included()
                            ->filter()
                            ->sort()
                            ->get();
        return $tiponotificaciones;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiponotificacione=Tiponotificacione::create($request->all());
        return $tiponotificacione;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiponotificacione  $tiponotificacione
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiponotificacione = Tiponotificacione::included()->findOrFail($id);
        return $tiponotificacione;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiponotificacione  $tiponotificacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiponotificacione $tiponotificacione)
    {
        $tiponotificacione->update($request->all());
        return $tiponotificacione;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiponotificacione  $tiponotificacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiponotificacione $tiponotificacione)
    {
        $tiponotificacione->delete();
        return $tiponotificacione;
    }
}
