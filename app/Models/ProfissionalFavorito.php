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
        'tutor_id',
        'profissional_id',
        'id',
        'avaliacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'profissional_id' => 'integer',
        'tutor_id' => 'integer',
        'avaliacao' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function profissional()
    {
        return $this->belongsTo(\App\Models\Profissional::class, 'profissional_id');
    }

}
