<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Repositories\AuthRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct(
        protected AuthRepository $repository,
        protected UserRepository $userRepository
    ) {}

    public function login(Request $request)
    {
        try {
            if ($request->isMethod('POST')) {
                $request->validate([
                    'email' => 'required|email',
                    'password' => 'required|min:8',
                ]);

                $success = $this->repository->login($request);
                if ($success) {
                    ResponseHelper::success('Login successful! Welcome to the admin panel.');
                    return redirect()->route('admin.dashboard');
                }

                ResponseHelper::error('Invalid credentials. Please check your email and password.');
                return back()->withInput();
            }
            $data['title'] = 'Admin Login';

            return view('admin.auth.login', compact('data'));
        } catch (ValidationException $e) {
            ResponseHelper::error($e->validator->errors()->first());
        }
    }

    public function logout(Request $request)
    {
        $this->repository->logout();
        ResponseHelper::success('You have been logged out successfully.');
        return redirect()->route('admin.login');
    }

    public function profileUpdate(Request $request)
    {
        try {
            if ($request->isMethod('POST')) {
                $request->validate([
                    'username' => 'nullable|string|max:255',
                    'email' => 'required|email|max:255',
                    'first_name' => 'nullable|string|max:255',
                    'last_name' => 'nullable|string|max:255',
                    'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'address' => 'nullable|string|max:255',
                    'city' => 'nullable|string|max:255',
                    'country' => 'nullable|string|max:255',
                    'about_me' => 'nullable|string',
                    'old_password' => 'nullable|string|min:8',
                    'new_password' => $request->filled('old_password') ? 'required|string|min:8|confirmed' : 'nullable|string|min:8|confirmed',
                ]);

                $this->repository->updateProfile($request);
                ResponseHelper::success('Profile updated successfully!');
                return redirect()->route('admin.profile');
            }

            $data['title'] = 'Profile Update';
            $data['user'] = $this->userRepository->AuthUser();

            return view('admin.pages.profile', compact('data'));
        } catch (ValidationException $e) {
            ResponseHelper::error($e->validator->errors()->first());
        }
    }
}
