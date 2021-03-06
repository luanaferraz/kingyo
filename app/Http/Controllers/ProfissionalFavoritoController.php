<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfissionalFavoritoRequest;
use App\Http\Requests\UpdateProfissionalFavoritoRequest;
use App\Models\Pet;
use App\Models\Tutor;
use App\Repositories\ProfissionalFavoritoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProfissionalFavoritoController extends AppBaseController
{
    /** @var  ProfissionalFavoritoRepository */
    private $profissionalFavoritoRepository;

    public function __construct(ProfissionalFavoritoRepository $profissionalFavoritoRepo)
    {
        $this->profissionalFavoritoRepository = $profissionalFavoritoRepo;
    }

    /**
     * Display a listing of the ProfissionalFavorito.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $profissionalFavoritos = $this->profissionalFavoritoRepository->all();

        return view('profissional_favoritos.index')
            ->with('profissionalFavoritos', $profissionalFavoritos);
    }

    /**
     * Show the form for creating a new ProfissionalFavorito.
     *
     * @return Response
     */
    public function create()
    {
        return redirect(route('favoritos.store'));
    }

    /**
     * Store a newly created ProfissionalFavorito in storage.
     *
     * @param CreateProfissionalFavoritoRequest $request
     *
     * @return Response
     */
    public function store(CreateProfissionalFavoritoRequest $request)
    {
        $input = $request->all();

        $profissionalFavorito = $this->profissionalFavoritoRepository->create($input);

        Flash::success('Profissional Favorito salvo com sucesso.');

        return redirect(route('favoritos'));
    }

    /**
     * Display the specified ProfissionalFavorito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profissionalFavorito = $this->profissionalFavoritoRepository->find($id);

        if (empty($profissionalFavorito)) {
            Flash::error('Profissional Favorito not found');

            return redirect(route('profissionalFavoritos.index'));
        }

        return view('profissional_favoritos.show')->with('profissionalFavorito', $profissionalFavorito);
    }

    /**
     * Show the form for editing the specified ProfissionalFavorito.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id,$avaliacao)
    {
        dd($avaliacao);

        $profissionalFavorito = $this->profissionalFavoritoRepository->find($id);

//        if (empty($profissionalFavorito)) {
//            Flash::error('Profissional Favorito não encontrado');
//
//            return redirect(route('profissionalFavoritos.index'));
//        }

//        return view('profissional_favoritos.edit')->with('profissionalFavorito', $profissionalFavorito);
        return redirect(route('avaliacao.update',[$id,$avaliacao]));

    }

    /**
     * Update the specified ProfissionalFavorito in storage.
     *
     * @param int $id
     * @param UpdateProfissionalFavoritoRequest $request
     *
     * @return Response
     */

    public function update($id,UpdateProfissionalFavoritoRequest $request)
    {
        $input = $request->all();
//        dd($input['id']);

        $profissionalFavorito = $this->profissionalFavoritoRepository->findByField('id',$id)->first();

        if (empty($profissionalFavorito)) {
            Flash::error('Profissional Favorito não encontrado');

            return redirect(route('profissionalFavoritos.index'));
        }

        $profissionalFavorito = $this->profissionalFavoritoRepository->update($input,$id);

        Flash::success('Avaliação salva com sucesso.');

        return redirect(route('favoritos'));
    }

    /**
     * Remove the specified ProfissionalFavorito from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profissionalFavorito = $this->profissionalFavoritoRepository->find($id);

        if (empty($profissionalFavorito)) {
            Flash::error('Profissional Favorito não encontrado');

            return redirect(route('profissionalFavoritos.index'));
        }

        $this->profissionalFavoritoRepository->delete($id);

        Flash::success('Profissional Favorito deletado com sucesso.');

        return redirect(route('profissionalFavoritos.index'));
    }

    public function favoritos(Request $request)
    {
        $tutor = Tutor::where('usuario_id', auth()->user()->id)->pluck('id');

        $favoritos = $this->profissionalFavoritoRepository->findByTutor($tutor);

        return view('profissional_favoritos.favoritos')
            ->with('favoritos', $favoritos);
    }
}
