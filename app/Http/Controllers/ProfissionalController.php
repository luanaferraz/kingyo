<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfissionalRequest;
use App\Http\Requests\UpdateProfissionalRequest;
use App\Repositories\ProfissionalFavoritoRepository;
use App\Repositories\ProfissionalRepository;
use App\Repositories\TutorRepository;
use Illuminate\Http\Request as Ajax;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Flash;
use Response;

class ProfissionalController extends Controller
{
    /** @var  ProfissionalRepository */
    private $profissionalRepository;

    public function __construct(ProfissionalRepository $profissionalRepo, TutorRepository $tutorRepository ,ProfissionalFavoritoRepository $profissionalFavoritoRepository)
    {
        $this->profissionalRepository = $profissionalRepo;
        $this->tutorRepository = $tutorRepository;
        $this->profissionalFavoritoRepository = $profissionalFavoritoRepository;
    }

    /**
     * Display a listing of the Profissional.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tutor = $this->tutorRepository->findByField('usuario_id', Auth::user()->id)->pluck('id');

        $favoritos = $this->profissionalFavoritoRepository->findByField('tutor_id', $tutor)->pluck('profissional_id');

        $profissionals = $this->profissionalRepository->all();

        return view('profissionals.index')
            ->with('profissionais', $profissionals);
    }

    /**
     * Show the form for creating a new Profissional.
     *
     * @return Response
     */
    public function create()
    {
        return view('profissionals.create');
    }

    /**
     * Store a newly created Profissional in storage.
     *
     * @param CreateProfissionalRequest $request
     *
     * @return Response
     */
    public function store(CreateProfissionalRequest $request)
    {
        $input = $request->all();

        $profissional = $this->profissionalRepository->create($input);

        Flash::success('Profissional salvo com sucesso.');

        return redirect(route('profissionals.index'));
    }

    /**
     * Display the specified Profissional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profissional = $this->profissionalRepository->find($id);

        if (empty($profissional)) {
            Flash::error('Profissional not found');

            return redirect(route('profissionals.index'));
        }

        return view('profissionals.show')->with('profissional', $profissional);
    }

    /**
     * Show the form for editing the specified Profissional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profissional = $this->profissionalRepository->find($id);

        if (empty($profissional)) {
            Flash::error('Profissional não encontrado');

            return redirect(route('profissionals.index'));
        }

        return view('profissionals.edit')->with('profissional', $profissional);
    }

    /**
     * Update the specified Profissional in storage.
     *
     * @param int $id
     * @param UpdateProfissionalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfissionalRequest $request)
    {
        $profissional = $this->profissionalRepository->find($id);

        if (empty($profissional)) {
            Flash::error('Profissional não encontrado');

            return redirect(route('profissionals.index'));
        }

        $profissional = $this->profissionalRepository->update($request->all(), $id);

        Flash::success('Profissional atualizado com sucesso.');

        return redirect(route('profissionals.index'));
    }

    /**
     * Remove the specified Profissional from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profissional = $this->profissionalRepository->find($id);

        if (empty($profissional)) {
            Flash::error('Profissional não encontrado');

            return redirect(route('profissionals.index'));
        }

        $this->profissionalRepository->delete($id);

        Flash::success('Profissional deletado com sucesso.');

        return redirect(route('profissionals.index'));
    }


    public function buscar()
    {
        $data = Request::all();

        $tutor = $this->tutorRepository->findByField('usuario_id', Auth::user()->id)->pluck('id');

        $favoritos = $this->profissionalFavoritoRepository->findByField('tutor_id', $tutor)->pluck('profissional_id');

        $profissionais = $this->profissionalRepository->buscar($data,$favoritos);


        return view('profissionals.index', compact( 'profissionais','value','area','tipos'));
    }

    public function cidades_select(Ajax $request){

        if ($request->ajax())
        {
            $page = Request::input('page');
            $term = Request::input("term");

            $clientes = $this->profissionalRepository->listar_drop($term,$page);

            return $clientes;
        }
    }

}
