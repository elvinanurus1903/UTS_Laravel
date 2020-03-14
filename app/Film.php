<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
     'kode', 'judul', 'pemain', 'sinopsis', 'tahun', 'genre', 'image'
    ];

     public function genre(){
    	return $this->belongsTo('App\genre' , 'genre', 'id_genre');
    }
}
