<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tipopersona;
use Illuminate\Http\Request;

class TipopersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipopersonas=Tipopersona::included()
                            ->filter()
                            ->sort()
                            ->get();
        return $tipopersonas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipopersona=Tipopersona::create($request->all());
        return $tipopersona;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipopersona  $tipopersona
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipopersona = Tipopersona::included()->findOrFail($id);
        return $tipopersona;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipopersona  $tipopersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipopersona $tipopersona)
    {
        $tipopersona->update($request->all());
        return $tipopersona;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipopersona  $tipopersona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipopersona $tipopersona)
    {
        $tipopersona->delete();
        return $tipopersona;
    }
}
