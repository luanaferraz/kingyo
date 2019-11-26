<?php

namespace App\Repositories;

use App\Models\Profissional;
use App\Models\ProfissionalFavorito;
use App\Repositories\BaseRepository;
use Illuminate\Container\Container as Application;
use Illuminate\Support\Facades\DB;

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
    public function findByTutor($tutors_id)
    {
//        $favoritos = ProfissionalFavorito::whereIn('tutor_id', $tutors_id)->groupBy('profissional_id')->get();

        $favoritos = DB::table('profissional')
            ->leftJoin('profissionalfavorito', 'profissional.id', '=', 'profissionalfavorito.profissional_id')
            ->select('profissional.*','profissionalfavorito.profissional_id','profissionalfavorito.tutor_id','profissionalfavorito.avaliacao',DB::raw('profissionalfavorito.id as idfavorito '),DB::raw('round(AVG(avaliacao),0) as nota'))
            ->whereIn('tutor_id', $tutors_id)
            ->groupBy('profissional.id')
            ->get();

        return $favoritos;
    }

    public function avaliacao($profissional)
    {
        $avaliacao = DB::table('profissionalfavorito')
            ->select(DB::raw('round(AVG(avaliacao),0) as nota'),DB::raw('count(*) as total'))
            ->where('profissional_id', $profissional)
            ->where('avaliacao', '!=', 0)
            ->get();

        return $avaliacao;
    }


}
