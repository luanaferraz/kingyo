<?php

namespace App\Repositories;

use App\Models\Tutor;
use App\Repositories\BaseRepository;

/**
 * Class TutorRepository
 * @package App\Repositories
 * @version October 15, 2019, 12:41 pm UTC
*/

class TutorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tutor::class;
    }

    public function findByIds($ids)
    {
        return Tutor::whereIn('id',$ids)->get();
    }


}
