<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(
        protected ProductRepository $repository
    ) {}

    public function index(Request $request)
    {
        $data['title'] = 'Products';
        $data['cardTitle'] = 'Products List';
        $data['collections'] = $this->repository->getPaginateData($request);
        return view('admin.products.index', compact('data'));
    }

    public function create()
    {
        $data['title'] = 'Add Product';
        $data['categories'] = $this->repository->getCategories();
        $data['sizes'] = $this->repository->getSizes();
        $data['colors'] = $this->repository->getColor();
        $data['brands'] = $this->repository->getBrands();
        return view('admin.products.create', compact('data'));
    }

    public function store(ProductRequest $request)
    {
        try {
            $this->repository->store($request->all());
            return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create product: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Product';
        $data['product'] = $this->repository->show($id);
        return view('admin.products.edit', compact('data'));
    }

    public function update(SizeRequest $request, $id)
    {
        try {
            $this->repository->update($id, $request);
            return redirect()->route('admin.sizes.index')->with('success', 'Size updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update size: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->repository->delete($id);
            return redirect()->route('admin.sizes.index')->with('success', 'Size deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete size: ' . $e->getMessage());
        }
    }
}
