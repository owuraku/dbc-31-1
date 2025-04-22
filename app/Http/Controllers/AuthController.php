<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect(route('services.index'));
        } else {
            return redirect()->back()->onlyInput('email')->withErrors([
                'email' => 'Invalid credentials'
            ]);
        }
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:4|max:255|regex:/^[a-zA-Z\s-]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                Password::min(6)
                // ->mixedCase()
                // ->numbers()
                // ->symbols()
                // ->uncompromised()
                ,
                'confirmed'
            ],
            'contact' => 'required|regex:/^\+?(\d{1,3})?[-.\s]?\(?(\d{3})\)?[-.\s]?(\d{3})[-.\s]?(\d{4})$/',
            'location' => 'required|min:3|max:255',
            'image' => 'required|image|max:500',
        ]);

        $imagePath = $request->file('image')->store();
        $data['image'] = $imagePath;
        $data['user_type'] = 'user';

        User::create($data);
        return redirect(route('auth.login.page'));
    }

    public function logout()
    {
        Auth::logout();
        // request()->session()->invalidate();
        // request()->session()->regenerate();

        return redirect(route('auth.login.page'));
    }
}
