<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\ProfissionalRepository;
use App\Repositories\TutorRepository;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TutorRepository $tutorRepository, ProfissionalRepository $profissionalRepository)
    {
        $this->middleware('guest');
        $this->tutorRepository = $tutorRepository;
        $this->profissionalRepository = $profissionalRepository;

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function register(Request $request)
    {
        $validate = $this->validator($request->all());

        if($validate){
            return response()->json([
                'Status' => 'FAIL',
                'Message' => $validate[0]
            ]);
        }

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return response()->json([
            'Status' => 'DONE',
            'Message' => 'Cadastro realizado com sucesso!'
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $usuario =  User::create([
            'name' => $data['nome'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
        ]);

        $data['usuario_id'] = $usuario->id;
        $tutor = $this->tutorRepository->create($data);

        return $usuario;
    }

    public function  showRegistrationFormProfissional (){
        return view ('auth.registerProfissional');
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


