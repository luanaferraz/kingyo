<?php

namespace App\Providers;

use App\Models\evento_profissional;
use App\Models\EventoPet;

use App\Models\Pet;
use App\Models\Profissional;
use App\Models\Tutor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('*', function($view) {
            if (auth()->check()) {
                $user = auth()->user();

                if($user->role_id == 1){
                    $tutor = Tutor::where('usuario_id', $user->id)->first();


                    $pets = Pet::where('tutor_id', $tutor->id)->get();
                    $pets_id = Pet::where('tutor_id', $tutor->id)->pluck('id');

                    $eventoPets = EventoPet::whereIn('pet_id', $pets_id)->get();

                    View::share('petsMenu', $pets);
                    View::share('tutor_id', $tutor->id);
                    View::share('eventoPets', $eventoPets);

                }

                if($user->role_id == 2){
                    $profissional = Profissional::where('usuario_id', $user->id)->first();

                    $eventoProfissional = evento_profissional::where('profissional_id', $profissional->id)->get();
                    View::share('eventoProfissional', $eventoProfissional);

                }
            }
        });
    }
}
