<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    public function __construct(TutorRepository $tutorRepository)
    {
        $this->middleware('guest');
        $this->tutorRepository = $tutorRepository;

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
//    public function register(Request $request)
//    {
//        $validate = $this->validator($request->all());
//
//        dd($validate);
//        die();
//
//        if($validate){
//
//            return response()->json([
//                'Status' => 'FAIL',
//                'Message' => $validate
//            ]);
//        }
//
//        event(new Registered($user = $this->create($request->all())));
//
//        $this->guard()->login($user);
//
//        return response()->json([
//            'Status' => 'DONE',
//            'Message' => 'Cadastro realizado com sucesso!'
//        ]);
//    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

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
        ]);

        $data['usuario_id'] = $usuario->id;
        $tutor = $this->tutorRepository->create($data);

        return $usuario;
    }
}


