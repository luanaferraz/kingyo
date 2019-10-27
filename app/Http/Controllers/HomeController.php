<?php

namespace App\Http\Controllers;

use App\Repositories\EventoPetRepository;
use App\Repositories\PetRepository;
use App\Repositories\TutorRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PetRepository $petRepository, TutorRepository $tutorRepository)
    {
        $this->middleware('auth');
        $this->petRepository = $petRepository;
        $this->tutorRepository = $tutorRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutor = $this->tutorRepository->findByField('usuario_id', Auth::user()->id)->first();
        $pets = $this->petRepository->findByTutor($tutor->id);

        return view('home')->with('pets', $pets);
    }
}
