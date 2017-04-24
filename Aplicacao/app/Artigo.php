<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
     protected $fillable =[
    	 'Titulo',
            'autor',
            'Area',
            'resultado',
            'palavrachave',
            'tipo',
            'eficiencia',
            'url',
            'ltg',
            'lng'
    ];
}
