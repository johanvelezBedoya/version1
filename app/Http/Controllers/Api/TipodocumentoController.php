<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tipodocumento;
use Illuminate\Http\Request;

class TipodocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipodocumentos=Tipodocumento::included()
                            ->filter()
                            ->sort()
                            ->get();
        return $tipodocumentos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipodocumento=Tipodocumento::create($request->all());
        return $tipodocumento;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipodocumento  $tipodocumento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipodocumento = Tipodocumento::included()->findOrFail($id);
        return $tipodocumento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipodocumento  $tipodocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipodocumento $tipodocumento)
    {
        $tipodocumento->update($request->all());
        return $tipodocumento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipodocumento  $tipodocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipodocumento $tipodocumento)
    {
        $tipodocumento->delete();
        return $tipodocumento;
    }
}
