<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model {


    /**
     * Campos preenchiveis do Artigo
     *
     */
    protected $fillable = [
        'titulo',
        'corpo',
        'publicado_em'
    ];


    /**
     * Campos adicionais que serão tratados como Carbon
     *
     */
    protected $dates = ['publicado_em'];


    /**
     * scope para arquivos que foram publicados
     *
     */
    public function scopePublicado($query)
    {
        $query->where('publicado_em', '<=', Carbon::now());
    }


    /**
     * Set publicado_em
     *
     */
    public function setPublicadoEmAttribute($date)
    {
        $this->attributes['publicado_em'] = Carbon::createFromFormat('Y-m-d', $date);
    }


    /**
     * Relaciona o artigo com o usuário
     * Um artigo é escrito por um usuário
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
