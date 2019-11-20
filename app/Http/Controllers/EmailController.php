<?php

namespace App\Http\Controllers;



use App\Repositories\EmailRepository;
use App\Repositories\TutorRepository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Services\MailService;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

class EmailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EmailRepository $emailRepository, TutorRepository $tutorRepository)
    {
        $this->emailRepository = $emailRepository;
        $this->tutorRepository = $tutorRepository;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function fale_conosco()
    {
        return view('paginas.contato');
    }

    public function contato_envia(MailService $mailService)
    {
//        $input = Request::all();

//        if(!filter_var($input['contatoEmail'], FILTER_VALIDATE_EMAIL)){
//            die('{"Status":"FAIL","Message":"Digite um email válido"}');
//        }

        $tutor = $this->tutorRepository->findByField('usuario_id', Auth::user()->id)->first();

        if($mailService->emailContato('contato',  $tutor)){
            session_start();
//            unset($_SESSION['qaptcha_key']);
            die('{"Status":"DONE","Message":"Contato realizado com sucesso! Em breve estaremos respondendo."}');
        }else{
            die('{"Status":"FAIL","Message":"Erro ao realizar contato, tente novamente mais tarde."}');
        }

    }



}
