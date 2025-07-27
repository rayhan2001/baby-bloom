<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryRepository
{
    public function __construct(
        protected Category $model
    ) {}

    public function getPaginateData($request, $fields = ['*'])
    {
        $query = $this->model->select($fields);

        if ($search = $request->input('search')) {
            $query->where('name', 'like', "%$search%");
        }

        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        return $query->paginate(10);
    }


    public function store($request)
    {
        $request['slug'] = Str::slug($request['name']);
        return $this->model->create($request);
    }

    public function show($id, $fields = ['*'])
    {
        return $this->model->select($fields)->findOrFail($id);
    }

    public function update($id, $request)
    {
        $category = $this->model->findOrFail($id);
        $request['slug'] = Str::slug($request['name']);
        return $category->update($request);
    }

    public function delete($id)
    {
        $category = $this->model->findOrFail($id);
        return $category->delete();
    }
}
