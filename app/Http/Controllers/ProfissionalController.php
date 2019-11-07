<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfissionalRequest;
use App\Http\Requests\UpdateProfissionalRequest;
use App\Repositories\ProfissionalRepository;
use App\Http\Controllers\AppBaseController;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Response;

class ProfissionalController extends Controller
{
    /** @var  ProfissionalRepository */
    private $profissionalRepository;

    public function __construct(ProfissionalRepository $profissionalRepo)
    {
        $this->profissionalRepository = $profissionalRepo;
    }

    /**
     * Display a listing of the Profissional.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $profissionals = $this->profissionalRepository->all();

        return view('profissionals.index')
            ->with('profissionals', $profissionals);
    }

    /**
     * Show the form for creating a new Profissional.
     *
     * @return Response
     */
    public function create()
    {
        return view('profissionals.create');
    }

    /**
     * Store a newly created Profissional in storage.
     *
     * @param CreateProfissionalRequest $request
     *
     * @return Response
     */
    public function store(CreateProfissionalRequest $request)
    {
        $input = $request->all();

        $profissional = $this->profissionalRepository->create($input);

        Flash::success('Profissional salvo com sucesso.');

        return redirect(route('profissionals.index'));
    }

    /**
     * Display the specified Profissional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $profissional = $this->profissionalRepository->find($id);

        if (empty($profissional)) {
            Flash::error('Profissional not found');

            return redirect(route('profissionals.index'));
        }

        return view('profissionals.show')->with('profissional', $profissional);
    }

    /**
     * Show the form for editing the specified Profissional.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $profissional = $this->profissionalRepository->find($id);

        if (empty($profissional)) {
            Flash::error('Profissional não encontrado');

            return redirect(route('profissionals.index'));
        }

        return view('profissionals.edit')->with('profissional', $profissional);
    }

    /**
     * Update the specified Profissional in storage.
     *
     * @param int $id
     * @param UpdateProfissionalRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProfissionalRequest $request)
    {
        $profissional = $this->profissionalRepository->find($id);

        if (empty($profissional)) {
            Flash::error('Profissional não encontrado');

            return redirect(route('profissionals.index'));
        }

        $profissional = $this->profissionalRepository->update($request->all(), $id);

        Flash::success('Profissional atualizado com sucesso.');

        return redirect(route('profissionals.index'));
    }

    /**
     * Remove the specified Profissional from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $profissional = $this->profissionalRepository->find($id);

        if (empty($profissional)) {
            Flash::error('Profissional não encontrado');

            return redirect(route('profissionals.index'));
        }

        $this->profissionalRepository->delete($id);

        Flash::success('Profissional deletado com sucesso.');

        return redirect(route('profissionals.index'));
    }


    public function  showRegistrationFormProfissional (){
        return view ('profissionals.create');
    }

    public function registerProfissional (Request $request)
    {
        $validate = $this->validator($request->all());

        if($validate){
            return response()->json([
                'Status' => 'FAIL',
                'Message' => $validate[0]
            ]);
        }

        event(new Registered($user = $this->createProfissional($request->all())));

//        $this->guard()->login($user);

        return response()->json([
            'Status' => 'DONE',
            'Message' => 'Cadastro realizado com sucesso!'
        ]);
    }

    protected function createProfissional(array $data)
    {
        $usuario =  User::create([
            'name' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
        ]);

        $data['usuario_id'] = $usuario->id;
        $profissional = $this->profissionalRepository->create($data);

        return $usuario;
    }

    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            return $errors;
        }
        return false;
    }
}
