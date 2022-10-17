<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Emprendimiento;
use Illuminate\Http\Request;

class EmprendimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emprendimientos=Emprendimiento::included()
                            ->filter()
                            ->sort()
                            ->get();
        return $emprendimientos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emprendimiento=Emprendimiento::create($request->all());
        return $emprendimiento;
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$emprendimiento = Emprendimiento::with(['publicaciones.emprendimiento'])->findOrFail($id);
        $emprendimiento = Emprendimiento::included()->findOrFail($id);
        return $emprendimiento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emprendimiento $emprendimiento)
    {
        $emprendimiento->update($request->all());
        return $emprendimiento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emprendimiento  $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprendimiento $emprendimiento)
    {
        $emprendimiento->delete();
        return $emprendimiento;
    }
}
