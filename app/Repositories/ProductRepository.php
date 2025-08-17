<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Str;

class ProductRepository
{
    public function __construct(
        protected Product $model,
        protected Category $categoryModel,
        protected Brand $brandModel,
        protected Color $colorModel,
        protected Size $sizeModel
    ) {}

    public function getPaginateData($request, $fields = ['*'])
    {
        $query = $this->model->select($fields);

        if ($search = $request->input('search')) {
            $query->where('title', 'like', "%$search%");
        }

        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        return $query->paginate(10);
    }

    public function getCategories()
    {
        return $this->categoryModel->select('id', 'name')->where('status', 'active')->get();
    }
    public function getSizes()
    {
        return $this->sizeModel->select('id', 'title')->where('status', 'active')->get();
    }
    public function getColor()
    {
        return $this->colorModel->select('id', 'title')->where('status', 'active')->get();
    }

    public function getBrands()
    {
        return $this->brandModel->select('id', 'name')->where('status', 'active')->get();
    }

    public function store($request)
    {
        $product = $this->model->create($request);

        $product->categories()->sync($request->input('categories', []));
        $product->sizes()->sync($request->input('sizes', []));
        $product->colors()->sync($request->input('colors', []));
        $product->brands()->sync($request->input('brands', []));

        return $product;
    }

    public function show($id, $fields = ['*'])
    {
        return $this->model->select($fields)->findOrFail($id);
    }

    public function update($id, $request)
    {
        $size = $this->model->findOrFail($id);

        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        return $size->update($data);
    }

    public function delete($id)
    {
        $size = $this->model->findOrFail($id);
        return $size->delete();
    }
}
