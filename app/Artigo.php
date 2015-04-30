<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model {

	protected $fillable = [
    'titulo',
    'corpo',
    'publicado_em'
  ];

  protected $dates = ['publicado_em'];
  
  public function scopePublicado($query)
  {
    $query->where('publicado_em', '<=', Carbon::now());
  }

  public function scopeNaoPublicado($query)
  {
    $query->where('publicado_em', '>', Carbon::now());
  }

  public function setPublicadoEmAttribute($date)
  {
    $this->attributes['publicado_em'] = Carbon::createFromFormat('Y-m-d', $date);
  }
  
  public function getPublicadoEm($date)
  {
    return $date->diffForHumans();
  }
}
