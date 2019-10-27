<?php

namespace App\Repositories;

use App\Models\Vacina;
use App\Repositories\BaseRepository;

/**
 * Class VacinaRepository
 * @package App\Repositories
 * @version October 23, 2019, 12:41 am UTC
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

    public function findByPet($pet)
    {
        return Vacina::where('pet_id',$pet)->orderBy('dataProxima')->get();
    }
}
