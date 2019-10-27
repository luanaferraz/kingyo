<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EventoPet
 * @package App\Models
 * @version October 19, 2019, 11:43 pm UTC
 *
 * @property string dialivre
 * @property string diaocupado
 * @property string tipo
 * @property string descricao
 * @property string data
 * @property integer status
 * @property integer pet_id
 */
class EventoPet extends Model
{
    use SoftDeletes;

    public $table = 'eventopet';
    
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
        'pet_id',
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
        'pet_id' => 'integer',
        'horario' => 'time'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo' => 'required',
        'data' => 'required',
        'status' => 'required',
        'pet_id' => 'required'
    ];


    public function getDataAttribute($date){
        return Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
    }

    /**
     * @return mixed
     */
    public function pet()
    {
        return $this->belongsTo(\App\Models\Pet::class, 'pet_id');
    }
}
