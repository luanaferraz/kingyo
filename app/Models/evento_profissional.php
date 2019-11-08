<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class evento_profissional
 * @package App\Models
 * @version November 5, 2019, 5:23 pm UTC
 *
 * @property \App\Models\Profissional profissional
 * @property string dialivre
 * @property string diaocupado
 * @property string tipo
 * @property string descricao
 * @property string data
 * @property integer status
 * @property integer profissional_id
 * @property time horario
 */
class evento_profissional extends Model
{
    use SoftDeletes;

    public $table = 'eventoprofissional';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'dialivre',
        'diaocupado',
        'tipo',
        'descricao',
        'data',
        'status',
        'profissional_id',
        'horario'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dialivre' => 'date',
        'diaocupado' => 'date',
        'tipo' => 'string',
        'descricao' => 'string',
        'data' => 'date',
        'status' => 'integer',
        'profissional_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo' => 'required',
//        'descricao' => 'required',
        'status' => 'required',
        'profissional_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function profissional()
    {
        return $this->belongsTo(\App\Models\Profissional::class, 'profissional_id');
    }
}
