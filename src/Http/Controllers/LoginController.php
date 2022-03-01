<?php

namespace Caiocesar173\Utils\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Tymon\JWTAuth\Facades\JWTAuth;
use App\Providers\RouteServiceProvider;

use Caiocesar173\Utils\Classes\ApiReturn;
use Caiocesar173\Utils\Enum\StatusEnum;

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
    protected $token = null;

    use AuthenticatesUsers {
        logout as logoutUser;
        sendLoginResponse as sendLoginResponseOriginal;
        sendFailedLoginResponse as sendFailedLoginResponseOriginal;
        attemptLogin as attemptLoginOriginal;
    }

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
    public function __construct(Request $request)
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {   
        $this->token = JWTAuth::attempt($this->credentials($request));

        return $this->token;
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendLoginResponse(Request $request)
    {      
        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user()))
            return $response;
        
        return ApiReturn::KeyMessage( 'Bearer', 200, $this->token, 'token');
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        return ApiReturn::ErrorMessage('Você não possui permissão suficiente para autenticar.', 401);
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $fieldType = filter_var($request->{$this->username()}, FILTER_VALIDATE_EMAIL) ? 'email' : 'document';
        return [$fieldType => $request->{$this->username()}, 'password' => $request->password, 'status' => StatusEnum::ACTIVE];
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
    }
    
    public function logout(Request $request)
    {
        auth()->logout();
        JWTAuth::parseToken()->invalidate( $request->bearerToken() );
        return ApiReturn::SuccessMessage('Usuario deslogado com sucesso');
    }
}
