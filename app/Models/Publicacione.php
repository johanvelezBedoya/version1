<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacione extends Model
{

    
    use HasFactory;

    protected $guarded = [];


    public function emprendimiento(){
        return $this->belongsTo('App\Models\Emprendimiento');
    }

    // public function multimedia(){
    //     return $this->hasMany('App\Models\Multimedia');
    // }

    public function reacciones(){
        return $this->hasMany('App\Models\Reaccione');
    }

    public function multimedias(){
        return $this->morphMany('App\Models\Multimedia', 'multimediaable');
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }

    


    protected $allowIncluded=['emprendimiento', 'emprendimiento.user', 'reacciones', 'comentarios', 'reacciones.user'];

    protected $allowFilter=['id', 'descripcion'];

    protected $allowSort=['id', 'descripcion']; 





    public function scopeIncluded(Builder $query){
       
        if(empty($this->allowIncluded)||empty(request('included'))){
            return;
        }
        $relations = explode(',', request('included'));//['post','relation2']
        
        $allowIncluded=collect($this->allowIncluded);//colocamos en una colecion lo que tiene $allowIncluded en este caso = ['publicaciones', 'publicaciones.emprendimiento']
        
        foreach($relations as $key => $relationship){//recorremos el array de relaciones
            
            if(!$allowIncluded->contains($relationship)){
                unset($relations[$key]);
            }
        
        }

        $query->with($relations);
     
    }




    public function scopeFilter(Builder $query){
        if(empty($this->allowFilter) || empty(request('filter'))){
            return ;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $filter => $value) {
            if ($allowFilter->contains($filter)) {

                //$query->where($filter, $value);
                $query->where($filter,'LIKE','%'.$value.'%');
            }
        }
    }



    public function scopeSort(Builder $query)
    {

        if (empty($this->allowSort) || empty(request('sort'))) {
            return;
        }

        $sortFields = explode(',',request('sort')) ;
        $allowSort = collect($this->allowSort);

        foreach ($sortFields as $sortField) {
            
            if ($allowSort->contains($sortField)) {
                $query->orderBy($sortField,'asc');
               }
        }
    }

    

}
