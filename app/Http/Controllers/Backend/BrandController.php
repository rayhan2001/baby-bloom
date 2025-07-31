<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Repositories\BrandRepository;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct(
        protected BrandRepository $repository
    ) {}

    public function index(Request $request)
    {
        $data['title'] = 'Brands';
        $data['cardTitle'] = 'Brands List';
        $data['formTitle'] = 'Brands';
        $data['collections'] = $this->repository->getPaginateData($request);
        return view('admin.brands.index', compact('data'));
    }

    public function store(BrandRequest $request)
    {
        try {
            $this->repository->store($request);
            return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create category: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        // Logic to update an existing brand
    }

    public function destroy($id)
    {
        // Logic to delete a brand
    }
}
