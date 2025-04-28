<?php

namespace App\Http\Controllers\Bo;

use App\Contracts\Repositories\AdminRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Exception;

class LoginController extends Controller
{
    public function username()
    {
        return 'username';
    }

    private $repositoryAdmin;

    /** CONSTRUCTOR */
    public function __construct(AdminRepository $repositoryAdmin)
    {
        $this->repositoryAdmin = $repositoryAdmin;
    }

    /** LOGIN */
    public function showLoginForm()
    {
        return view('bo.auth.login');
    }
    public function login(LoginRequest $request)
    {
        if(auth()->attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            $user = auth()->user();
            return redirect(route('news.index'));
        } else {
            return back()->withErrors(['email' => 'Address email or/and password are incorrect.']);
        }
    }

    /** LOGOUT */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
