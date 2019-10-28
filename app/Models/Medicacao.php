<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Medicacao
 * @package App\Models
 * @version October 27, 2019, 3:38 pm UTC
 *
 * @property \App\Models\Pet pet
 * @property string nome
 * @property string data
 * @property string|\Carbon\Carbon hora
 * @property integer pet_id
 */
class Medicacao extends Model
{
    use SoftDeletes;

    public $table = 'medicacao';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'data',
        'hora',
        'pet_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'data' => 'date',
        'hora' => 'time',
        'pet_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'data' => 'required',
        'hora' => 'required',
        'pet_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pet()
    {
        return $this->belongsTo(\App\Models\Pet::class, 'pet_id');
    }
}
