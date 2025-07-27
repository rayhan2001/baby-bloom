<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{
    public function __construct(
        protected User $model
    ) {}

    public function login($request)
    {
        $credentials = $request->only('email', 'password');
        
        $user = $this->model->where('email', $credentials['email'])
            ->where('is_admin', true)
            ->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::guard('admin')->login($user);
            return true;
        }
        
        return false;
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return true;
    }
}
