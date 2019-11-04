<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateservicoRequest;
use App\Http\Requests\UpdateservicoRequest;
use App\Repositories\servicoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class servicoController extends AppBaseController
{
    /** @var  servicoRepository */
    private $servicoRepository;

    public function __construct(servicoRepository $servicoRepo)
    {
        $this->servicoRepository = $servicoRepo;
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
        $servicos = $this->servicoRepository->all();

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
        return view('servicos.create');
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

        Flash::success('Servico salvo com sucesso.');

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
            Flash::error('Servico not found');

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
            Flash::error('Servico não encontrado');

            return redirect(route('servicos.index'));
        }

        return view('servicos.edit')->with('servico', $servico);
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
            Flash::error('Servico não encontrado');

            return redirect(route('servicos.index'));
        }

        $servico = $this->servicoRepository->update($request->all(), $id);

        Flash::success('Servico atualizado com sucesso.');

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
            Flash::error('Servico não encontrado');

            return redirect(route('servicos.index'));
        }

        $this->servicoRepository->delete($id);

        Flash::success('Servico deletado com sucesso.');

        return redirect(route('servicos.index'));
    }
}
