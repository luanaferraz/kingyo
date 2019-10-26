<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVacinaRequest;
use App\Http\Requests\UpdateVacinaRequest;
use App\Repositories\VacinaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VacinaController extends AppBaseController
{
    /** @var  VacinaRepository */
    private $vacinaRepository;

    public function __construct(VacinaRepository $vacinaRepo)
    {
        $this->vacinaRepository = $vacinaRepo;
    }

    /**
     * Display a listing of the Vacina.
     *
     * @param Request $request
     *
     * @return Response
     */
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
    public function create()
    {
        return view('vacinas.create');
    }

    /**
     * Store a newly created Vacina in storage.
     *
     * @param CreateVacinaRequest $request
     *
     * @return Response
     */
    public function store(CreateVacinaRequest $request)
    {
        $input = $request->all();

        $vacina = $this->vacinaRepository->create($input);

        Flash::success('Vacina salvo com sucesso.');

        return redirect(route('vacinas.index'));
    }

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
    public function edit($id)
    {
        $vacina = $this->vacinaRepository->find($id);

        if (empty($vacina)) {
            Flash::error('Vacina não encontrado');

            return redirect(route('vacinas.index'));
        }

        return view('vacinas.edit')->with('vacina', $vacina);
    }

    /**
     * Update the specified Vacina in storage.
     *
     * @param int $id
     * @param UpdateVacinaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVacinaRequest $request)
    {
        $vacina = $this->vacinaRepository->find($id);

        if (empty($vacina)) {
            Flash::error('Vacina não encontrado');

            return redirect(route('vacinas.index'));
        }

        $vacina = $this->vacinaRepository->update($request->all(), $id);

        Flash::success('Vacina atualizado com sucesso.');

        return redirect(route('vacinas.index'));
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
    public function destroy($id)
    {
        $vacina = $this->vacinaRepository->find($id);

        if (empty($vacina)) {
            Flash::error('Vacina não encontrado');

            return redirect(route('vacinas.index'));
        }

        $this->vacinaRepository->delete($id);

        Flash::success('Vacina deletado com sucesso.');

        return redirect(route('vacinas.index'));
    }


}
