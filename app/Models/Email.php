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
class Email extends Model
{
    use SoftDeletes;

//    public $table = 'tutor';
//
//    const CREATED_AT = 'created_at';
//    const UPDATED_AT = 'updated_at';


//    protected $dates = ['deleted_at'];


    public $fillable = [

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
