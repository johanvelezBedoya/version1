<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Publicacione;
use Illuminate\Http\Request;

class PublicacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones=Publicacione::included()
                            ->filter()
                            ->sort()
                            ->get();
        return $publicaciones;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacione = new Publicacione();
        
        $file=$request->file("imagen");
        // $nombreArchivo = "img_".time().".".$file->guessExtension();
        // $request->file('imagen')->storeAs('public/multimedia_folder', $nombreArchivo );
        $temp= $publicacione->create(['descripcion'=>$request->descripcion, 'emprendimiento_id'=>$request->emprendimiento_id, ]);
        $publicacione=Publicacione::find($temp);
        return $publicacione;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacione  $publicacione
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacione = Publicacione::included()->findOrFail($id);
        return $publicacione;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicacione  $publicacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacione $publicacione)
    {
        
        // $publicacione['imagen'] = time() . '_' . $request->file(key: 'imagen')->getClientOriginalName();
        // $request->file(key: 'imagen')->storeAs(path:'multimedia_folder', name: $publicacione['imagen']);
        $publicacione->descripcion = $request->descripcion;
        $publicacione->save();
            
        return $publicacione;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacione  $publicacione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacione $publicacione)
    {
        $publicacione->delete();
        return $publicacione;
    }
}
