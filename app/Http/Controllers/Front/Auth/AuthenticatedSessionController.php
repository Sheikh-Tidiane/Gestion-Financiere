<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\FrontLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountBlocked;
use App\Models\Frontuser;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('front.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\FrontLoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FrontLoginRequest $request)
    {
        $request->authenticate();

          // Vérifiez si le compte est bloqué
          $user = auth('front')->user();
          if (!$user->isNotBlocked()) {

                // Envoyer un email à l'utilisateur
            Mail::to($user->email)->send(new AccountBlocked($user));

            // Déconnectez l'utilisateur et renvoyez un message d'erreur
            Auth::guard('front')->logout();
            return redirect()->back()->withInput()->withErrors(['email' => 'Votre compte a été bloqué. Veuillez vérifier votre mail pour plus d\'informations.']);
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
