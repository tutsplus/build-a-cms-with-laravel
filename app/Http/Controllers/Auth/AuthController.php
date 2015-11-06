<?php

namespace SundaySim\Http\Controllers\Auth;

use SundaySim\User;
use SundaySim\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectAfterLogout = route('auth.login');
        $this->redirectTo = route('backend.dashboard');

        $this->middleware('guest', ['except' => 'getLogout']);
    }
}
