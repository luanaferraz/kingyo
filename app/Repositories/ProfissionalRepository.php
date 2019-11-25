<?php

namespace App\Repositories;

use App\Models\Admin\Propriedade;
use App\Models\Profissional;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

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

    public function buscar($data,$favoritos)
    {
        $resultado = Profissional::select('*');

        if (!empty($data['nome']))
            $resultado->where('nome', 'LIKE',  '%' .$data['nome']. '%' );


        if (!empty($data['cidades'])) {
            $resultado->whereIn('cidade',  $data['cidades']);
        }


        $resultado->whereNotIn('id', $favoritos );

        return $resultado->paginate(9);
    }

    public function listar_drop($term,$page){

        $resultCount = 10;

        $offset = ($page - 1) * $resultCount;


        $breeds = Profissional::select(DB::raw("cidade as text"))
            ->having('text', 'LIKE',  '%' .$term. '%')
            ->groupBy('text')
            ->orderBy('text', 'asc')->skip($offset)->take($resultCount)->get(['text']);


        $count = Profissional::select(DB::raw("cidade as text"))
            ->having('text', 'LIKE',  '%' .$term. '%')
            ->groupBy('text')
            ->get()->count();



        $endCount = $offset + $resultCount;
        $morePages = $count > $endCount;

        $results = array(
            "results" => $breeds,
            "pagination" => array(
                "more" => $morePages
            )
        );

        return response()->json($results);
    }

    public function selectAll()
    {
        $avaliacao = DB::table('profissional')
            ->leftJoin('profissionalfavorito', 'profissional.id', '=', 'profissionalfavorito.profissional_id')
            ->select('profissional.*','profissionalfavorito.profissional_id','profissionalfavorito.tutor_id',DB::raw('round(AVG(avaliacao),0) as nota'))
            ->groupBy('profissional.id')
            ->get();
//dd($avaliacao);
        return $avaliacao;
    }
}
