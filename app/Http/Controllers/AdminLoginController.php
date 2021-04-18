<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    /**
     * Admin user authentication
     * 
     * @param void
     * 
     * @return void
     */
    public function __invoke(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            return 'welcome again';
        }

        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $request->filled('remember_me'))) {
            return 'you\'re Admin';
        }else{
            throw AuthorizationException::class;
        }
    }
}
