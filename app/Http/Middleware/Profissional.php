<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Profissional {

    protected $auth;
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

        if ($this->auth->guest())
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->guest('login');
            }
        }

        $response = $next($request);

        switch($this->auth->user()->role_id){
            case 2:
                break;
            case 1:
                return redirect()->to('/home');
                break;
        }
		return $response;
	}

}
