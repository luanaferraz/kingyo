<?php

namespace App\Http\Controllers;

use App\Repositories\EventoPetRepository;
use App\Repositories\PetRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PetRepository $petRepository)
    {
        $this->middleware('auth');
        $this->petRepository = $petRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = $this->petRepository->findByTutor(Auth::user()->id);

        return view('home')->with('pets', $pets);
    }
}
