<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(
        protected CategoryRepository $repository
    ) {}

    public function index(Request $request)
    {
        $data['title'] = 'Categories';
        $data['formTitle'] = 'Categories';
        $data['collections'] = $this->repository->getPaginateData($request);
        if ($request->has('id')) {
            $data['title'] = 'Edit Category';
            $data['formTitle'] = 'Edit Category';
            $data['category'] = $this->repository->show($request->id);
        }
        return view('admin.categories.index', compact('data'));
    }

    public function store(CategoryRequest $request)
    {
        try {
            $this->repository->store($request);
            return redirect()->route('admin.categories.index')->with('success', 'Category created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create category: ' . $e->getMessage());
        }
    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            $this->repository->update($id, $request);
            return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update category: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->repository->delete($id);
            return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete category: ' . $e->getMessage());
        }
    }
}
