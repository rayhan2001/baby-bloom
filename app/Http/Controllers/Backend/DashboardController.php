<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(
        protected UserRepository $repository
    ) {}

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['collection'] = $this->repository->AuthUser();
        return view('admin.pages.dashboard', compact('data'));
    }
}
