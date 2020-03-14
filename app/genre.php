<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    
    protected $table='genre';
    protected $primaryKey = 'id_genre';
    protected $fillable = ['id_genre','jenis_genre'];

    public function film(){
    	return $this->hasMany('App\Film', 'genre' , 'id_genre');
}
}
