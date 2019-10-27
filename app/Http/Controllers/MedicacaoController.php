<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicacaoRequest;
use App\Http\Requests\UpdateMedicacaoRequest;
use App\Repositories\MedicacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class MedicacaoController extends AppBaseController
{
    /** @var  MedicacaoRepository */
    private $medicacaoRepository;

    public function __construct(MedicacaoRepository $medicacaoRepo)
    {
        $this->medicacaoRepository = $medicacaoRepo;
    }

    /**
     * Display a listing of the Medicacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $medicacaos = $this->medicacaoRepository->all();

        return view('medicacaos.index')
            ->with('medicacaos', $medicacaos);
    }

    /**
     * Show the form for creating a new Medicacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('medicacaos.create');
    }

    /**
     * Store a newly created Medicacao in storage.
     *
     * @param CreateMedicacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateMedicacaoRequest $request)
    {
        $input = $request->all();

        $medicacao = $this->medicacaoRepository->create($input);

        Flash::success('Medicacao salvo com sucesso.');

        return redirect(route('medicacaos.index'));
    }

    /**
     * Display the specified Medicacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $medicacao = $this->medicacaoRepository->find($id);

        if (empty($medicacao)) {
            Flash::error('Medicacao not found');

            return redirect(route('medicacaos.index'));
        }

        return view('medicacaos.show')->with('medicacao', $medicacao);
    }

    /**
     * Show the form for editing the specified Medicacao.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $medicacao = $this->medicacaoRepository->find($id);

        if (empty($medicacao)) {
            Flash::error('Medicacao não encontrado');

            return redirect(route('medicacaos.index'));
        }

        return view('medicacaos.edit')->with('medicacao', $medicacao);
    }

    /**
     * Update the specified Medicacao in storage.
     *
     * @param int $id
     * @param UpdateMedicacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMedicacaoRequest $request)
    {
        $medicacao = $this->medicacaoRepository->find($id);

        if (empty($medicacao)) {
            Flash::error('Medicacao não encontrado');

            return redirect(route('medicacaos.index'));
        }

        $medicacao = $this->medicacaoRepository->update($request->all(), $id);

        Flash::success('Medicacao atualizado com sucesso.');

        return redirect(route('medicacaos.index'));
    }

    /**
     * Remove the specified Medicacao from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $medicacao = $this->medicacaoRepository->find($id);

        if (empty($medicacao)) {
            Flash::error('Medicacao não encontrado');

            return redirect(route('medicacaos.index'));
        }

        $this->medicacaoRepository->delete($id);

        Flash::success('Medicacao deletado com sucesso.');

        return redirect(route('medicacao.index'));
    }

    public function ativar($id)
    {
//        $id = base64_decode($id);
        $this->medicacaoRepository->ativar($id);
        Flash::success('Medicação ativado(a) com sucesso.');
        return redirect(route('medicacaos.index'));
    }

    public function inativar($id)
    {
//        $id = base64_decode($id);
        $this->medicacaoRepository->inativar($id);
        Flash::success('Medicaçao inativado(a) com sucesso.');
        return redirect(route('medicacaos.index'));
    }

}
