<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class servico
 * @package App\Models
 * @version November 2, 2019, 10:03 pm UTC
 *
 * @property \App\Models\Profissional profissional
 * @property string descricao
 * @property number custo
 * @property integer profissional_id
 */
class servico extends Model
{
    use SoftDeletes;

    public $table = 'servico';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'descricao',
        'custo',
        'profissional_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descricao' => 'string',
        'custo' => 'float',
        'profissional_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'profissional_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function profissional()
    {
        return $this->belongsTo(\App\Models\Profissional::class, 'profissional_id');
    }

    public function getCustoAttribute($valor){
        if(!empty($valor))
            return "R$ ".number_format($valor, 2, ",", ".");
    }
}
