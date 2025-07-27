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

    public function updateProfile($request)
    {
        $user = Auth::guard('admin')->user();
        
        $data = $request->only([
            'username',
            'first_name',
            'last_name',
            'email',
            'address',
            'city',
            'country',
            'about_me'
        ]);

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/profiles'), $filename);
            $data['profile_picture'] = 'uploads/profiles/' . $filename;
        }

        // Handle password change
        if ($request->filled('old_password') && $request->filled('new_password')) {
            if (Hash::check($request->old_password, $user->password)) {
                $data['password'] = Hash::make($request->new_password);
            } else {
                throw new \Exception('Old password is incorrect.');
            }
        }

        $this->model->where('id', $user->id)->update($data);
        return true;
    }
}
