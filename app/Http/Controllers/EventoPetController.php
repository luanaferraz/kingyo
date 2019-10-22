<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventoPetRequest;
use App\Http\Requests\UpdateEventoPetRequest;
use App\Repositories\EventoPetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EventoPetController extends AppBaseController
{
    /** @var  EventoPetRepository */
    private $eventoPetRepository;

    public function __construct(EventoPetRepository $eventoPetRepo)
    {
        $this->eventoPetRepository = $eventoPetRepo;
    }

    /**
     * Display a listing of the EventoPet.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $eventoPets = $this->eventoPetRepository->all();

        return view('evento_pets.index')
            ->with('eventoPets', $eventoPets);
    }

    /**
     * Show the form for creating a new EventoPet.
     *
     * @return Response
     */
    public function create()
    {
        return view('evento_pets.create');
    }

    /**
     * Store a newly created EventoPet in storage.
     *
     * @param CreateEventoPetRequest $request
     *
     * @return Response
     */
    public function store(CreateEventoPetRequest $request)
    {
        $input = $request->all();

        $eventoPet = $this->eventoPetRepository->create($input);

        Flash::success('Evento Pet salvo com sucesso.');

        return redirect(route('eventoPets.index'));
    }

    /**
     * Display the specified EventoPet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventoPet = $this->eventoPetRepository->find($id);

        if (empty($eventoPet)) {
            Flash::error('Evento Pet not found');

            return redirect(route('eventoPets.index'));
        }

        return view('evento_pets.show')->with('eventoPet', $eventoPet);
    }

    /**
     * Show the form for editing the specified EventoPet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventoPet = $this->eventoPetRepository->find($id);

        if (empty($eventoPet)) {
            Flash::error('Evento Pet não encontrado');

            return redirect(route('eventoPets.index'));
        }

        return view('evento_pets.edit')->with('eventoPet', $eventoPet);
    }

    /**
     * Update the specified EventoPet in storage.
     *
     * @param int $id
     * @param UpdateEventoPetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventoPetRequest $request)
    {
        $eventoPet = $this->eventoPetRepository->find($id);

        if (empty($eventoPet)) {
            Flash::error('Evento Pet não encontrado');

            return redirect(route('eventoPets.index'));
        }

        $eventoPet = $this->eventoPetRepository->update($request->all(), $id);

        Flash::success('Evento Pet atualizado com sucesso.');

        return redirect(route('eventoPets.index'));
    }

    /**
     * Remove the specified EventoPet from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventoPet = $this->eventoPetRepository->find($id);

        if (empty($eventoPet)) {
            Flash::error('Evento Pet não encontrado');

            return redirect(route('eventoPets.index'));
        }

        $this->eventoPetRepository->delete($id);

        Flash::success('Evento Pet deletado com sucesso.');

        return redirect(route('eventoPets.index'));
    }
}
