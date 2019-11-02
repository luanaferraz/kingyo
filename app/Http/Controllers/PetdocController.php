<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePetdocRequest;
use App\Http\Requests\UpdatePetdocRequest;
use App\Repositories\PetdocRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PetRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class PetdocController extends AppBaseController
{
    /** @var  PetdocRepository */
    private $petdocRepository;

    public function __construct(PetdocRepository $petdocRepo, PetRepository $petRepository)
    {
        $this->petdocRepository = $petdocRepo;
        $this->petRepository = $petRepository;
    }

    /**
     * Display a listing of the Petdoc.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($pet_id = null,Request $request)
    {
        $petdocs = $this->petdocRepository->findByField('pet_id', $pet_id);

        $pet = $this->petRepository->findByPet($pet_id);

        return view('petdocs.index')
            ->with('petdocs', $petdocs)
            ->with('pet', $pet);
    }

    /**
     * Show the form for creating a new Petdoc.
     *
     * @return Response
     */
    public function create($pet_id)
    {
        $pet = $this->petRepository->findByPet($pet_id);
        return view('petdocs.create')->with('pet', $pet);
    }

    /**
     * Store a newly created Petdoc in storage.
     *
     * @param CreatePetdocRequest $request
     *
     * @return Response
     */
    public function store($pet,CreatePetdocRequest $request)
    {
        $input = $request->all();

        $petdoc = $this->petdocRepository->create_with_upload($input);

        Flash::success('Documento salvo com sucesso.');

        return redirect(route('petdocs.index', [$pet]));
    }

    /**
     * Display the specified Petdoc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $petdoc = $this->petdocRepository->find($id);

        if (empty($petdoc)) {
            Flash::error('Documento not found');

            return redirect(route('petdocs.index'));
        }

        return view('petdocs.show')->with('petdoc', $petdoc);
    }

    /**
     * Show the form for editing the specified Petdoc.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($pet_id, $id)
    {
        $petdoc = $this->petdocRepository->find($id);
        $pet = $this->petRepository->findByPet($pet_id);
        if (empty($petdoc)) {
            Flash::error('Documento não encontrado');

            return redirect(route('petdocs.index'));
        }

        return view('petdocs.edit')->with('petdoc', $petdoc)->with('pet', $pet);
    }

    /**
     * Update the specified Petdoc in storage.
     *
     * @param int $id
     * @param UpdatePetdocRequest $request
     *
     * @return Response
     */
    public function update($pet, $id, UpdatePetdocRequest $request)
    {
        $petdoc = $this->petdocRepository->find($id);

        if (empty($petdoc)) {
            Flash::error('Documento não encontrado');

            return redirect(route('petdocs.index'));
        }

        $petdoc = $this->petdocRepository->update_with_upload($request->all(), $id);

        Flash::success('Documento atualizado com sucesso.');

        return redirect(route('petdocs.index', [$pet]));
    }

    /**
     * Remove the specified Petdoc from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($pet, $id)
    {
        $petdoc = $this->petdocRepository->find($id);

        if (empty($petdoc)) {
            Flash::error('Documento não encontrado');

            return redirect(route('petdocs.index', [$pet]));
        }

        $this->petdocRepository->destroy_with_upload($id,$petdoc);

        Flash::success('Documento deletado com sucesso.');

        return redirect(route('petdocs.index', [$pet]));
    }



}
