<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFotoRequest;
use App\Http\Requests\UpdateFotoRequest;
use App\Repositories\FotoRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PetRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class FotoController extends AppBaseController
{
    /** @var  FotoRepository */
    private $fotoRepository;

    public function __construct(FotoRepository $fotoRepo, PetRepository $petRepository)
    {
        $this->fotoRepository = $fotoRepo;
        $this->petRepository = $petRepository;
    }

    /**
     * Display a listing of the Foto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index($pet_id = null,Request $request)
    {
        $fotos = $this->fotoRepository->findByField('pet_id',$pet_id);
        $pet = $this->petRepository->findByPet($pet_id);
        return view('fotos.index')
            ->with('fotos', $fotos)
            ->with('pet', $pet);
    }

    /**
     * Show the form for creating a new Foto.
     *
     * @return Response
     */
    public function create($pet_id)
    {
        $pet = $this->petRepository->findByPet($pet_id);
        return view('fotos.create')->with('pet', $pet);
    }

    /**
     * Store a newly created Foto in storage.
     *
     * @param CreateFotoRequest $request
     *
     * @return Response
     */
    public function store($pet,CreateFotoRequest $request)
    {
        $input = $request->all();

        $foto = $this->fotoRepository->create_with_upload($input);

        Flash::success('Foto salvo com sucesso.');

        return redirect(route('fotos.index', [$pet]));
    }

    /**
     * Display the specified Foto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $foto = $this->fotoRepository->find($id);

        if (empty($foto)) {
            Flash::error('Foto not found');

            return redirect(route('fotos.index'));
        }

        return view('fotos.show')->with('foto', $foto);
    }

    /**
     * Show the form for editing the specified Foto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $foto = $this->fotoRepository->find($id);

        if (empty($foto)) {
            Flash::error('Foto não encontrado');

            return redirect(route('fotos.index'));
        }

        return view('fotos.edit')->with('foto', $foto);
    }

    /**
     * Update the specified Foto in storage.
     *
     * @param int $id
     * @param UpdateFotoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFotoRequest $request)
    {
        $foto = $this->fotoRepository->find($id);

        if (empty($foto)) {
            Flash::error('Foto não encontrado');

            return redirect(route('fotos.index'));
        }

        $foto = $this->fotoRepository->update($request->all(), $id);

        Flash::success('Foto atualizado com sucesso.');

        return redirect(route('fotos.index'));
    }

    /**
     * Remove the specified Foto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($pet,$id)
    {
        $foto = $this->fotoRepository->find($id);

        if (empty($foto)) {
            Flash::error('Foto não encontrado');

            return redirect(route('fotos.index'));
        }

        $this->fotoRepository->destroy_with_upload($id,$foto);

        Flash::success('Foto deletado com sucesso.');

        return redirect(route('fotos.index', [$pet]));
    }
}
