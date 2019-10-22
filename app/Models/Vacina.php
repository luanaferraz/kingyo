<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vacina
 * @package App\Models
 * @version October 22, 2019, 1:02 am UTC
 *
 * @property \App\Models\Pet pet
 * @property string nome
 * @property string dataAplicacao
 * @property string dataProxima
 * @property integer pet_id
 */
class Vacina extends Model
{
    use SoftDeletes;

    public $table = 'vacina';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nome',
        'dataAplicacao',
        'dataProxima',
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
        'dataAplicacao' => 'date',
        'dataProxima' => 'date',
        'pet_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'dataProxima' => 'required',
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
