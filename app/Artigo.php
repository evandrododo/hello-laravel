<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model {

	protected $fillable = [
    'titulo',
    'corpo',
    'publicado_em'
  ];

}
