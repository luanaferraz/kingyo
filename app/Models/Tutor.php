<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tutor
 * @package App\Models
 * @version October 15, 2019, 12:41 pm UTC
 *
 * @property \App\Models\User usuario
 * @property \Illuminate\Database\Eloquent\Collection pets
 * @property integer usuario_id
 * @property string pais
 * @property string estado
 * @property string cidade
 * @property string bairro
 * @property string rua
 * @property string numero
 * @property string telefone
 */
class Tutor extends Model
{
    use SoftDeletes;

    public $table = 'tutor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'usuario_id',
        'pais',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'telefone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'usuario_id' => 'integer',
        'pais' => 'string',
        'estado' => 'string',
        'cidade' => 'string',
        'bairro' => 'string',
        'rua' => 'string',
        'numero' => 'string',
        'telefone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
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
        return $this->belongsTo(\App\User::class, 'usuario_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pets()
    {
        return $this->hasMany(\App\Models\Pet::class, 'tutor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function profissionalfavoritos()
    {
        return $this->hasMany(\App\Models\Profissionalfavorito::class, 'tutor_id');
    }
}
