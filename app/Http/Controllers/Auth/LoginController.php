<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

//? Use Request
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

		//? Untuk mengoverwrite jika user login menggunakan email, maka  kolom yang di gunakan adalah Email, jika user login dengan menggunakan Username, maka di over write ke kolom username 
    protected function credentials(Request $request)
			{
				$field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
					? $this->username()
					: 'username';

				return [
					$field => $request->get($this->username()),
					'password' => $request->password,
					//? Dimana User yang kolom is_admin nya bernilai true, bisa login di sisi admin 
					'is_admin' => true,
				];
			} 
}
