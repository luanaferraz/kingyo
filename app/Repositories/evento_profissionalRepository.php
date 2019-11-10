<?php

namespace App\Repositories;

use App\Models\evento_profissional;
use App\Repositories\BaseRepository;

/**
 * Class evento_profissionalRepository
 * @package App\Repositories
 * @version November 5, 2019, 5:23 pm UTC
*/

class evento_profissionalRepository extends BaseRepository
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
        'profissional_id',
        'horario'
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
        return evento_profissional::class;
    }
}
