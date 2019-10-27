<?php

namespace App\Repositories;

use App\Models\Petdoc;
use App\Repositories\BaseRepository;

/**
 * Class PetdocRepository
 * @package App\Repositories
 * @version October 26, 2019, 6:03 pm UTC
*/

class PetdocRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pet_id',
        'file'
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
        return Petdoc::class;
    }



}

