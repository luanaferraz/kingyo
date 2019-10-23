<?php

namespace App\Repositories;

use App\Models\Pet;
use App\Repositories\BaseRepository;

/**
 * Class PetRepository
 * @package App\Repositories
 * @version October 19, 2019, 9:24 pm UTC
*/

class PetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Pet::class;
    }

    public function findPet($tutor)
    {
        return Pet::where('tutor_id', $tutor)->orderBy('nome')->pluck('nome','id');
    }
}
