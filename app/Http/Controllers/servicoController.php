<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateservicoRequest;
use App\Http\Requests\UpdateservicoRequest;
use App\Repositories\ProfissionalRepository;
use App\Repositories\servicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;

class servicoController extends AppBaseController
{
    /** @var  servicoRepository */
    private $servicoRepository;

    public function __construct(servicoRepository $servicoRepo, ProfissionalRepository $profissionalRepository)
    {
        $this->servicoRepository = $servicoRepo;
        $this->profissionalRepository = $profissionalRepository;
    }

    /**
     * Display a listing of the servico.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $profissional = $this->profissionalRepository->findByField('usuario_id', Auth::user()->id)->first();
        $servicos = $this->servicoRepository->findByField('profissional_id', $profissional->id);

        return view('servicos.index')
            ->with('servicos', $servicos);
    }

    /**
     * Show the form for creating a new servico.
     *
     * @return Response
     */
    public function create()
    {
        $profissional = $this->profissionalRepository->findByField('usuario_id', Auth::user()->id)->first();

        return view('servicos.create')->with('profissional',$profissional);
    }

    /**
     * Store a newly created servico in storage.
     *
     * @param CreateservicoRequest $request
     *
     * @return Response
     */
    public function store(CreateservicoRequest $request)
    {
        $input = $request->all();

        $servico = $this->servicoRepository->create($input);

        Flash::success('Serviço salvo com sucesso.');

        return redirect(route('servicos.index'));
    }

    /**
     * Display the specified servico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servico = $this->servicoRepository->find($id);

        if (empty($servico)) {
            Flash::error('Serviço not found');

            return redirect(route('servicos.index'));
        }

        return view('servicos.show')->with('servico', $servico);
    }

    /**
     * Show the form for editing the specified servico.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servico = $this->servicoRepository->find($id);

        if (empty($servico)) {
            Flash::error('Serviço não encontrado');

            return redirect(route('servicos.index'));
        }

        $profissional = $this->profissionalRepository->findByField('usuario_id', Auth::user()->id)->first();

        return view('servicos.edit')->with('servico', $servico)->with('profissional',$profissional);
    }

    /**
     * Update the specified servico in storage.
     *
     * @param int $id
     * @param UpdateservicoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateservicoRequest $request)
    {
        $servico = $this->servicoRepository->find($id);

        if (empty($servico)) {
            Flash::error('Serviço não encontrado');

            return redirect(route('servicos.index'));
        }

        $servico = $this->servicoRepository->update($request->all(), $id);

        Flash::success('Serviço atualizado com sucesso.');

        return redirect(route('servicos.index'));
    }

    /**
     * Remove the specified servico from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servico = $this->servicoRepository->find($id);

        if (empty($servico)) {
            Flash::error('Serviço não encontrado');

            return redirect(route('servicos.index'));
        }

        $this->servicoRepository->delete($id);

        Flash::success('Serviço deletado com sucesso.');

        return redirect(route('servicos.index'));
    }
}
