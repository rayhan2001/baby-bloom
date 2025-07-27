<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ResponseHelper;
use App\Http\Controllers\Controller;
use App\Repositories\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function __construct(
        protected AuthRepository $repository,
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
}
