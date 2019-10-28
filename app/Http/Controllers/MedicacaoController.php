<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicacaoRequest;
use App\Http\Requests\UpdateMedicacaoRequest;
use App\Repositories\MedicacaoRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PetRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class MedicacaoController extends AppBaseController
{
    /** @var  MedicacaoRepository */
    private $medicacaoRepository;

    public function __construct(MedicacaoRepository $medicacaoRepo, PetRepository $petRepository)
    {
        $this->medicacaoRepository = $medicacaoRepo;
        $this->petRepository = $petRepository;
    }

    /**
     * Display a listing of the Medicacao.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($pet_id = null, Request $request)
    {
        $medicacaos = $this->medicacaoRepository->findByField('pet_id',$pet_id);
        $pet = $this->petRepository->findByPet($pet_id);

        return view('medicacaos.index')
            ->with('medicacaos', $medicacaos)
            ->with('pet', $pet);
    }

    /**
     * Show the form for creating a new Medicacao.
     *
     * @return Response
     */
    public function create($pet_id)
    {
        $pet = $this->petRepository->findByPet($pet_id);
        return view('medicacaos.create')->with('pet', $pet);
    }

    /**
     * Store a newly created Medicacao in storage.
     *
     * @param CreateMedicacaoRequest $request
     *
     * @return Response
     */
    public function store($pet,CreateMedicacaoRequest $request)
    {
        $input = $request->all();

        $medicacao = $this->medicacaoRepository->create($input);

        Flash::success('Medicacao salvo com sucesso.');

        return redirect(route('medicacaos.index',[$pet]));
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
    public function edit($pet_id, $id)
    {
        $medicacao = $this->medicacaoRepository->find($id);
        $pet = $this->petRepository->findByPet($pet_id);

        if (empty($medicacao)) {
            Flash::error('Medicacao não encontrado');

            return redirect(route('medicacaos.index'));
        }

        return view('medicacaos.edit')->with('medicacao', $medicacao)->with('pet', $pet);
    }

    /**
     * Update the specified Medicacao in storage.
     *
     * @param int $id
     * @param UpdateMedicacaoRequest $request
     *
     * @return Response
     */
    public function update($pet, $id, UpdateMedicacaoRequest $request)
    {
        $medicacao = $this->medicacaoRepository->find($id);

        if (empty($medicacao)) {
            Flash::error('Medicacao não encontrado');

            return redirect(route('medicacaos.index'));
        }

        $medicacao = $this->medicacaoRepository->update($request->all(), $id);

        Flash::success('Medicacao atualizado com sucesso.');

        return redirect(route('medicacaos.index', [$pet]));
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
    public function destroy($pet, $id)
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
        return redirect(route('medicacaos.index', [$pet]));
    }

}
