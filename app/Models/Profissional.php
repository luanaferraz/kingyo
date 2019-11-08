<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profissional
 * @package App\Models
 * @version November 2, 2019, 4:26 am UTC
 *
 * @property \App\Models\User usuario
 * @property \Illuminate\Database\Eloquent\Collection eventoprofissionals
 * @property \Illuminate\Database\Eloquent\Collection pets
 * @property \Illuminate\Database\Eloquent\Collection servicos
 * @property string nome
 * @property string profissao
 * @property string pais
 * @property string estado
 * @property string cidade
 * @property string bairro
 * @property string rua
 * @property string numero
 * @property string visualizacao
 * @property string telefone
 * @property integer usuario_id
 */
class Profissional extends Model
{
    use SoftDeletes;

    public $table = 'profissional';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'profissao',
        'pais',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'visualizacao',
        'telefone',
        'usuario_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'profissao' => 'string',
        'pais' => 'string',
        'estado' => 'string',
        'cidade' => 'string',
        'bairro' => 'string',
        'rua' => 'string',
        'numero' => 'string',
        'visualizacao' => 'string',
        'telefone' => 'string',
        'usuario_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'profissao' => 'required',
        'pais' => 'required',
        'estado' => 'required',
        'cidade' => 'required',
        'bairro' => 'required',
        'rua' => 'required',
        'numero' => 'required',
        'telefone' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usuario()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function eventoprofissionals()
    {
        return $this->hasMany(\App\Models\Eventoprofissional::class, 'profissional_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function pets()
    {
        return $this->belongsToMany(\App\Models\Pet::class, 'profissionalfavorito');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servicos()
    {
        return $this->hasMany(\App\Models\Servico::class, 'profissional_id');
    }
}
