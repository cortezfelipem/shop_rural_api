<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendLoginResponse(Request $request)
    {
        $this->clearLoginAttempts($request);

        $user = Auth::user();
        $token = $user->createToken('app-token')->accessToken;

        return response()->json([
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => now()->addDays(7)->timestamp, // Pode ajustar o tempo de expiração do token conforme necessário
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        // Verifique se há lógica de redirecionamento aqui
        return response()->json([
            'user' => $user,
            'access_token' => $user->createToken('app-token')->accessToken,
            'token_type' => 'Bearer',
            'expires_in' => now()->addDays(7)->timestamp,
        ]);
    }

}
