<?php

namespace App\Repositories;

use App\Models\Vacina;
use App\Repositories\BaseRepository;

/**
 * Class VacinaRepository
 * @package App\Repositories
 * @version October 22, 2019, 1:02 am UTC
*/

class VacinaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'dataAplicacao',
        'dataProxima',
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
        return Vacina::class;
    }
}
