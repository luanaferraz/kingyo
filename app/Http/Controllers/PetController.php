<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePetRequest;
use App\Http\Requests\UpdatePetRequest;
use App\Repositories\PetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PetController extends AppBaseController
{
    /** @var  PetRepository */
    private $petRepository;

    public function __construct(PetRepository $petRepo)
    {
        $this->petRepository = $petRepo;
    }

    /**
     * Display a listing of the Pet.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pets = $this->petRepository->all();

        return view('pets.index')
            ->with('pets', $pets);
    }

    /**
     * Show the form for creating a new Pet.
     *
     * @return Response
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created Pet in storage.
     *
     * @param CreatePetRequest $request
     *
     * @return Response
     */
    public function store(CreatePetRequest $request)
    {
        $input = $request->all();

        $pet = $this->petRepository->create($input);

        Flash::success('Pet salvo com sucesso.');

        return redirect(route('pets.index'));
    }

    /**
     * Display the specified Pet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pet = $this->petRepository->find($id);

        if (empty($pet)) {
            Flash::error('Pet not found');

            return redirect(route('pets.index'));
        }

        return view('pets.show')->with('pet', $pet);
    }

    /**
     * Show the form for editing the specified Pet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pet = $this->petRepository->find($id);

        if (empty($pet)) {
            Flash::error('Pet não encontrado');

            return redirect(route('pets.index'));
        }

        return view('pets.edit')->with('pet', $pet);
    }

    /**
     * Update the specified Pet in storage.
     *
     * @param int $id
     * @param UpdatePetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePetRequest $request)
    {
        $pet = $this->petRepository->find($id);

        if (empty($pet)) {
            Flash::error('Pet não encontrado');

            return redirect(route('pets.index'));
        }

        $pet = $this->petRepository->update($request->all(), $id);

        Flash::success('Pet atualizado com sucesso.');

        return redirect(route('pets.index'));
    }

    /**
     * Remove the specified Pet from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pet = $this->petRepository->find($id);

        if (empty($pet)) {
            Flash::error('Pet não encontrado');

            return redirect(route('pets.index'));
        }

        $this->petRepository->delete($id);

        Flash::success('Pet deletado com sucesso.');

        return redirect(route('pets.index'));
    }
}
