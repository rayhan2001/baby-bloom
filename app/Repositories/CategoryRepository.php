<?php

namespace App\Repositories;

use App\Helpers\ImageUploadHelper;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
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
        $data = $request->validated();

        $data['slug'] = Str::slug($data['name']);

        if ($request->hasFile('icon')) {
            $data['icon'] = ImageUploadHelper::store($request->file('icon'), 'categories');
        }

        return $this->model->create($data);
    }

    public function show($id, $fields = ['*'])
    {
        return $this->model->select($fields)->findOrFail($id);
    }

    public function update($id, $request)
    {
        $category = $this->model->findOrFail($id);

        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);

        if ($request->hasFile('icon')) {
            $data['icon'] = ImageUploadHelper::store(
                $request->file('icon'),
                'categories',
                $category->icon
            );
        }

        return $category->update($data);
    }

    public function delete($id)
    {
        $category = $this->model->findOrFail($id);
        if ($category->icon && Storage::disk('public')->exists($category->icon)) {
            Storage::disk('public')->delete($category->icon);
        }
        return $category->delete();
    }
}
