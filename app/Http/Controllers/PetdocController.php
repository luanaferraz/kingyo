<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePetdocRequest;
use App\Http\Requests\UpdatePetdocRequest;
use App\Repositories\PetdocRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PetdocController extends AppBaseController
{
    /** @var  PetdocRepository */
    private $petdocRepository;

    public function __construct(PetdocRepository $petdocRepo)
    {
        $this->petdocRepository = $petdocRepo;
    }

    /**
     * Display a listing of the Petdoc.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $petdocs = $this->petdocRepository->all();

        return view('petdocs.index')
            ->with('petdocs', $petdocs);
    }

    /**
     * Show the form for creating a new Petdoc.
     *
     * @return Response
     */
    public function create()
    {
        return view('petdocs.create');
    }

    /**
     * Store a newly created Petdoc in storage.
     *
     * @param CreatePetdocRequest $request
     *
     * @return Response
     */
    public function store(CreatePetdocRequest $request)
    {
        $input = $request->all();

        $petdoc = $this->petdocRepository->create_with_upload($input);

        Flash::success('Petdoc salvo com sucesso.');

        return redirect(route('petdocs.index'));
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
            Flash::error('Petdoc not found');

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
    public function edit($id)
    {
        $petdoc = $this->petdocRepository->find($id);

        if (empty($petdoc)) {
            Flash::error('Petdoc não encontrado');

            return redirect(route('petdocs.index'));
        }

        return view('petdocs.edit')->with('petdoc', $petdoc);
    }

    /**
     * Update the specified Petdoc in storage.
     *
     * @param int $id
     * @param UpdatePetdocRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePetdocRequest $request)
    {
        $petdoc = $this->petdocRepository->find($id);

        if (empty($petdoc)) {
            Flash::error('Petdoc não encontrado');

            return redirect(route('petdocs.index'));
        }

        $petdoc = $this->petdocRepository->update_with_upload($request->all(), $id);

        Flash::success('Petdoc atualizado com sucesso.');

        return redirect(route('petdocs.index'));
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
    public function destroy($id)
    {
        $petdoc = $this->petdocRepository->find($id);

        if (empty($petdoc)) {
            Flash::error('Petdoc não encontrado');

            return redirect(route('petdocs.index'));
        }

        $this->petdocRepository->destroy_with_upload($id,$petdoc);

        Flash::success('Petdoc deletado com sucesso.');

        return redirect(route('petdocs.index'));
    }



}
