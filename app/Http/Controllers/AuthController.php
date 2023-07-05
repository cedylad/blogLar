<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();

        return to_route('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            //intended permet de rediriger vers la page demandé à la base sinon ça renverra sur l'index
            return redirect()->intended(route('blog.index'));
        }

        return to_route('auth.login')->withErrors([
            'email' => 'Identifiant invalide'
        ])->onlyInput('email');
    }
}
