<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVacinaRequest;
use App\Http\Requests\UpdateVacinaRequest;
use App\Repositories\PetRepository;
use App\Repositories\VacinaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VacinaController extends AppBaseController
{
    /** @var  VacinaRepository */
    private $vacinaRepository;

    public function __construct(VacinaRepository $vacinaRepo, PetRepository $petRepository)
    {
        $this->vacinaRepository = $vacinaRepo;
        $this->petRepository = $petRepository;
    }

    /**
     * Display a listing of the Vacina.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index_pet($pet_id = null,Request $request)
    {

        $vacinas = $this->vacinaRepository->findByPet($pet_id);

        $pet = $this->petRepository->findByPet($pet_id);

        return view('vacinas.index')
            ->with('vacinas', $vacinas)
            ->with('pet', $pet);
    }

    public function index(Request $request)
    {
        $vacinas = $this->vacinaRepository->all();

        return view('vacinas.index')
            ->with('vacinas', $vacinas);
    }

    public function getIndex()
    {
        $vacinas = Vacina::with('pet')->get();
        return view('vacinas.index', compact(['vacinas']));
    }
    /**
     * Show the form for creating a new Vacina.
     *
     * @return Response
     */
    public function create($pet_id)
    {
        $pet = $this->petRepository->findByPet($pet_id);
        return view('vacinas.create')->with('pet', $pet);
    }

//    public function create()
//    {
//        return view('vacinas.create');
//    }

    /**
     * Store a newly created Vacina in storage.
     *
     * @param CreateVacinaRequest $request
     *
     * @return Response
     */
    public function store($pet,CreateVacinaRequest $request)
    {
        $input = $request->all();

        $vacina = $this->vacinaRepository->create($input);

        Flash::success('Vacina salva com sucesso.');

        return redirect(route('vacinas.index_pet', [$pet]));
    }

//    public function store(CreateVacinaRequest $request)
//    {
//        $input = $request->all();
//
//        $vacina = $this->vacinaRepository->create($input);
//
//        Flash::success('Vacina salvo com sucesso.');
//
//        return redirect(route('vacinas.index'));
//    }

    /**
     * Display the specified Vacina.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vacina = $this->vacinaRepository->find($id);

        if (empty($vacina)) {
            Flash::error('Vacina not found');

            return redirect(route('vacinas.index'));
        }

        return view('vacinas.show')->with('vacina', $vacina);
    }

    /**
     * Show the form for editing the specified Vacina.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($pet_id,$id)
    {
        $vacina = $this->vacinaRepository->find($id);
        $pet = $this->petRepository->findByPet($pet_id);
        if (empty($vacina)) {
            Flash::error('Vacina não encontrada');

            return redirect(route('vacinas.index'));
        }

        return view('vacinas.edit')->with('vacina', $vacina)->with('pet', $pet);
    }

    /**
     * Update the specified Vacina in storage.
     *
     * @param int $id
     * @param UpdateVacinaRequest $request
     *
     * @return Response
     */
    public function update($pet,$id, UpdateVacinaRequest $request)
    {
        $vacina = $this->vacinaRepository->find($id);

        if (empty($vacina)) {
            Flash::error('Vacina não encontrada');

            return redirect(route('vacinas.index'));
        }

        $vacina = $this->vacinaRepository->update($request->all(), $id);

        Flash::success('Vacina atualizada com sucesso.');

        return redirect(route('vacinas.index_pet', [$pet] ));
    }

    /**
     * Remove the specified Vacina from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($pet, $id)
    {
        $vacina = $this->vacinaRepository->find($id);

        if (empty($vacina)) {
            Flash::error('Vacina não encontrada');

            return redirect(route('vacinas.index_pet', [$pet]));
        }

        $this->vacinaRepository->delete($id);

        Flash::success('Vacina deletado com sucesso.');

        return redirect(route('vacinas.index_pet', [$pet]));
    }


}
