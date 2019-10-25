<?php

namespace App\Http\Controllers;

use App\Repositories\EventoPetRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EventoPetRepository $eventoPetRepo)
    {
        $this->middleware('auth');
        $this->eventoPetRepository = $eventoPetRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventoPets = $this->eventoPetRepository->all();
        return view('layouts.app')->with('eventoPets', $eventoPets);;
    }
}
