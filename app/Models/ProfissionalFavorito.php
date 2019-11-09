<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProfissionalFavorito
 * @package App\Models
 * @version November 8, 2019, 10:38 pm UTC
 *
 * @property \App\Models\Pet pet
 * @property \App\Models\Profissional profissional
 * @property integer pet_id
 */
class ProfissionalFavorito extends Model
{
    use SoftDeletes;

    public $table = 'profissionalfavorito';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'pet_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'profissional_id' => 'integer',
        'pet_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pet_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pet()
    {
        return $this->belongsTo(\App\Models\Pet::class, 'pet_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function profissional()
    {
        return $this->belongsTo(\App\Models\Profissional::class, 'profissional_id');
    }
}
