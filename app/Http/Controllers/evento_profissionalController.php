<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createevento_profissionalRequest;
use App\Http\Requests\Updateevento_profissionalRequest;
use App\Repositories\evento_profissionalRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class evento_profissionalController extends AppBaseController
{
    /** @var  evento_profissionalRepository */
    private $eventoProfissionalRepository;

    public function __construct(evento_profissionalRepository $eventoProfissionalRepo, ProfissionalRepository $profissionalRepository)
    {
        $this->eventoProfissionalRepository = $eventoProfissionalRepo;
        $this->profissionalRepository = $profissionalRepository;
    }

    /**
     * Display a listing of the evento_profissional.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $eventoProfissional = $this->eventoProfissionalRepository->all();

        return view('evento_profissional.index')
            ->with('eventoProfissional', $eventoProfissional);
    }

    /**
     * Show the form for creating a new evento_profissional.
     *
     * @return Response
     */
    public function create()
    {
        return view('evento_profissional.create');

        $profissional = $this->profissionalRepository->findByField('usuario_id', Auth::user()->id)->first();

        return view('evento_profissional.create')->with('profissional',$profissional);
    }

    /**
     * Store a newly created evento_profissional in storage.
     *
     * @param Createevento_profissionalRequest $request
     *
     * @return Response
     */
    public function store(Createevento_profissionalRequest $request)
    {
        $input = $request->all();

        $eventoProfissional = $this->eventoProfissionalRepository->create($input);

        Flash::success('Evento Profissional salvo com sucesso.');

        return redirect(route('eventoProfissional.index'));
    }

    /**
     * Display the specified evento_profissional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventoProfissional = $this->eventoProfissionalRepository->find($id);

        if (empty($eventoProfissional)) {
            Flash::error('Evento Profissional not found');

            return redirect(route('eventoProfissional.index'));
        }

        return view('evento_profissional.show')->with('eventoProfissional', $eventoProfissional);
    }

    /**
     * Show the form for editing the specified evento_profissional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventoProfissional = $this->eventoProfissionalRepository->find($id);

        if (empty($eventoProfissional)) {
            Flash::error('Evento Profissional não encontrado');

            return redirect(route('eventoProfissional.index'));
        }

        return view('evento_profissional.edit')->with('eventoProfissional', $eventoProfissional);
    }

    /**
     * Update the specified evento_profissional in storage.
     *
     * @param int $id
     * @param Updateevento_profissionalRequest $request
     *
     * @return Response
     */
    public function update($id, Updateevento_profissionalRequest $request)
    {
        $eventoProfissional = $this->eventoProfissionalRepository->find($id);

        if (empty($eventoProfissional)) {
            Flash::error('Evento Profissional não encontrado');

            return redirect(route('eventoProfissional.index'));
        }

        $eventoProfissional = $this->eventoProfissionalRepository->update($request->all(), $id);

        Flash::success('Evento Profissional atualizado com sucesso.');

        return redirect(route('eventoProfissional.index'));
    }

    /**
     * Remove the specified evento_profissional from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventoProfissional = $this->eventoProfissionalRepository->find($id);

        if (empty($eventoProfissional)) {
            Flash::error('Evento Profissional não encontrado');

            return redirect(route('eventoProfissional.index'));
        }

        $this->eventoProfissionalRepository->delete($id);

        Flash::success('Evento Profissional deletado com sucesso.');

        return redirect(route('eventoProfissional.index'));
    }
}
