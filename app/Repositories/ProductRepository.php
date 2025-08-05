<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Size;
use Illuminate\Support\Str;

class ProductRepository
{
    public function __construct(
        protected Size $model,
        protected Category $categoryModel,
        protected Brand $brandModel
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
        return $this->model->select('id', 'title')->where('status', 'active')->get();
    }
    public function getColor()
    {
        return $this->model->select('id', 'title')->where('status', 'active')->get();
    }

    public function getBrands()
    {
        return $this->brandModel->select('id', 'name')->where('status', 'active')->get();
    }


    public function store($request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        return $this->model->create($data);
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
