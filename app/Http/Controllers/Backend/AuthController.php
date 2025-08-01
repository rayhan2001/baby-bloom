<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ProfileRequest;
use App\Repositories\AuthRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct(protected AuthRepository $repository, protected UserRepository $userRepository) {}

    public function loginPage()
    {
        $data['title'] = 'Admin Login';
        return view('admin.auth.login', compact('data'));
    }
    public function store(LoginRequest $request)
    {
        $success = $this->repository->login($request);
        if ($success) {
            ResponseHelper::success('Login successful! Welcome to the admin panel.');
            return redirect()->route('admin.dashboard');
        }

        ResponseHelper::error('Invalid credentials. Please check your email and password.');
        return back()->withInput();
    }

    public function logout(Request $request)
    {
        $this->repository->logout();
        ResponseHelper::success('You have been logged out successfully.');
        return redirect()->route('admin.login');
    }

    public function profilePage()
    {
        $data['title'] = 'Profile Update';
        $data['user'] = $this->userRepository->AuthUser();
        return view('admin.pages.profile', compact('data'));
    }

    public function profileUpdate(ProfileRequest $request)
    {
        $this->repository->updateProfile($request);
        ResponseHelper::success('Profile updated successfully!');
        return redirect()->route('admin.profile');
    }
}
