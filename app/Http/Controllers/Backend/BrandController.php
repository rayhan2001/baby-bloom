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
        if ($request->has('id')) {
            $data['title'] = 'Edit Brand';
            $data['formTitle'] = 'Edit Brand';
            $data['brand'] = $this->repository->show($request->id);
        }
        return view('admin.brands.index', compact('data'));
    }

    public function store(BrandRequest $request)
    {
        try {
            $this->repository->store($request);
            return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create brand: ' . $e->getMessage());
        }
    }

    public function update(BrandRequest $request, $id)
    {
        try {
            $this->repository->update($id, $request);
            return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update brand: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->repository->delete($id);
            return redirect()->route('admin.brands.index')->with('success', 'Brand deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete brand: ' . $e->getMessage());
        }
    }
}
