<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{
     /**
     * Show the application's admin login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // dd($request);
        // Validate the form data
        $this->validate($request, [
            'username' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->username, 'password' => $request->password])) {
            
            return redirect()->route('admin.dashboard');
        }
    // dd("jiya");
        // If unsuccessful, redirect back to the login form with an error message
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
{
    Auth::guard('admin')->logout();
    $request->session()->invalidate();
    return redirect('/');
}
}
