<?php

namespace App\Repositories;

use App\Models\Medicacao;
use App\Repositories\BaseRepository;

/**
 * Class MedicacaoRepository
 * @package App\Repositories
 * @version October 27, 2019, 3:38 pm UTC
*/

class MedicacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'data',
        'hora',
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
        return Medicacao::class;
    }

    public function ativar($id)
    {
        $medicacaos = Medicacao::findOrFail($id);
        $medicacaos->status = 1;
        if ($medicacaos->save()) {
            return true;
        }
        return false;
    }

    public function inativar($id)
    {
        $medicacaos = Medicacao::findOrFail($id);
        $medicacaos->status = 2;
        if ($medicacaos->save()) {
            return true;
        }
        return false;
    }

}
