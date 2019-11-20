<?php

namespace App\Repositories;

use App\Models\ProfissionalFavorito;
use App\Repositories\BaseRepository;

/**
 * Class ProfissionalFavoritoRepository
 * @package App\Repositories
 * @version November 8, 2019, 10:38 pm UTC
*/

class ProfissionalFavoritoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return ProfissionalFavorito::class;
    }
    public function findByPets($tutors_id)
    {
        $favoritos = ProfissionalFavorito::whereIn('tutor_id', $tutors_id)->groupBy('profissional_id')->get();

        return $favoritos;
    }
}
