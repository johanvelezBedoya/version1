<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buzon;
use Illuminate\Http\Request;

class BuzonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buzons=Buzon::included()
                            ->filter()
                            ->sort()
                            ->get();
        return $buzons;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $buzon=Buzon::create($request->all());
        return $buzon;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buzon = Buzon::included()->findOrFail($id);
        return $buzon;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buzon $buzon)
    {
        $buzon->update($request->all());
        return $buzon;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buzon $buzon)
    {
        $buzon->delete();
        return $buzon;
    }
}
