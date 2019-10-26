<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pet
 * @package App\Models
 * @version October 19, 2019, 9:24 pm UTC
 *
 * @property \App\Models\Tutor tutor
 * @property \Illuminate\Database\Eloquent\Collection documentos
 * @property \Illuminate\Database\Eloquent\Collection eventopets
 * @property \Illuminate\Database\Eloquent\Collection fotos
 * @property \Illuminate\Database\Eloquent\Collection medicacaos
 * @property \Illuminate\Database\Eloquent\Collection profissionals
 * @property \Illuminate\Database\Eloquent\Collection vacinas
 * @property string especie
 * @property string porte
 * @property string raca
 * @property string nome
 * @property string idade
 * @property integer status
 * @property string sexo
 * @property integer tutor_id
 */
class Pet extends Model
{
    use SoftDeletes;

    public $table = 'pet';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'especie',
        'porte',
        'raca',
        'nome',
        'idade',
        'status',
        'sexo',
        'tutor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'especie' => 'string',
        'porte' => 'string',
        'raca' => 'string',
        'nome' => 'string',
        'idade' => 'string',
        'status' => 'integer',
        'sexo' => 'string',
        'tutor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status' => 'required',
        'tutor_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tutor()
    {
        return $this->belongsTo(\App\Models\Tutor::class, 'tutor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function documentos()
    {
        return $this->hasMany(\App\Models\Documento::class, 'pet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function eventopets()
    {
        return $this->hasMany(\App\Models\Eventopet::class, 'pet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function fotos()
    {
        return $this->hasMany(\App\Models\Foto::class, 'pet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function medicacaos()
    {
        return $this->hasMany(\App\Models\Medicacao::class, 'pet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function profissionals()
    {
        return $this->belongsToMany(\App\Models\Profissional::class, 'profissionalfavorito');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vacina()
    {
        return $this->hasMany(\App\Models\Vacina::class, 'pet_id');

    }



}

