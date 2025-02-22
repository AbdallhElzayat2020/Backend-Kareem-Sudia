<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::count();

        return view('Dashboard.SuperAdmin.Home', compact('users'));
    }

    public function showLoginForm(): View
    {
        return view('auth.admin-auth');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'max:255', 'exists:admins'],
            'password' => ['required', 'min:6'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard/home')->with('welcome Back Mr Kareem');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }
}
