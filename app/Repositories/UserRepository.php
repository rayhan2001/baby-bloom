<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    public function __construct(
        protected User $model
    ) {}


    public function AuthUser()
    {
        return Auth::user();
    }
}
