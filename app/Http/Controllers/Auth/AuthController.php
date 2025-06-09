<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Show login form
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('auth.login');
    }

    /**
     * Show registration form
     *
     * @return \Illuminate\View\View
     */
    public function registration(): View
    {
        return view('auth.registration');
    }

    /**
     * Handle login request
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                ->withSuccess('You have successfully logged in');
        }

        return redirect("login")
            ->withError('Invalid credentials. Please try again.');
    }

    /**
     * Handle registration request
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postRegistration(Request $request): RedirectResponse
    {
        try {
            $data = $this->validateRegistration($request);
            $user = $this->create($data);
            Auth::login($user);

            return redirect("home")
                ->withSuccess('Registration successful! You are now logged in.');

        } catch (ValidationException $e) {
            return back()
                ->withErrors($e->validator)
                ->withInput();
        }
    }

    /**
     * Validate registration data
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateRegistration(Request $request): array
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);
    }

    /**
     * Show dashboard
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('home');
        }

        return redirect("login")
            ->withSuccess('Please login to access the dashboard.');
    }

    /**
     * Create a new user instance
     *
     * @param array $data
     * @return \App\Models\User
     */
    public function create(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'] ?? 'user' // Default role
        ]);
    }

    /**
     * Logout user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        try {
            Auth::logout();
            Session::flush();

            return redirect('login')
                ->withSuccess('You have been successfully logged out.');

        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withError('Failed to logout. Please try again.');
        }
    }
}
