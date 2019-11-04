<?php

namespace App\Repositories;

use App\Models\servico;
use App\Repositories\BaseRepository;

/**
 * Class servicoRepository
 * @package App\Repositories
 * @version November 2, 2019, 10:03 pm UTC
*/

class servicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descricao',
        'custo',
        'profissional_id'
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
        return servico::class;
    }
}
