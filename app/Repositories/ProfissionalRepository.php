<?php

namespace App\Repositories;

use App\Models\Profissional;
use App\Repositories\BaseRepository;

/**
 * Class ProfissionalRepository
 * @package App\Repositories
 * @version November 2, 2019, 4:26 am UTC
*/

class ProfissionalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'profissao',
        'pais',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'visualizacao',
        'telefone',
        'usuario_id'
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
        return Profissional::class;
    }
}
