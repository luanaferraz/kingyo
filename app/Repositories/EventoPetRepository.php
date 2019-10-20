<?php

namespace App\Repositories;

use App\Models\EventoPet;
use App\Repositories\BaseRepository;

/**
 * Class EventoPetRepository
 * @package App\Repositories
 * @version October 19, 2019, 11:43 pm UTC
*/

class EventoPetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dialivre',
        'diaocupado',
        'tipo',
        'descricao',
        'data',
        'status',
        'pet_id'
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
        return EventoPet::class;
    }
}
