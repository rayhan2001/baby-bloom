<?php

namespace App\Repositories;

use App\Helpers\ImageUploadHelper;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BrandRepository
{
    public function __construct(
        protected Brand $model
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
        if ($request->hasFile('image')) {
            $data['image'] = ImageUploadHelper::store($request->file('image'), 'brands');
        }
        return $this->model->create($data);
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function update($id, $request)
    {
        $brand = $this->model->findOrFail($id);

        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        if ($request->hasFile('image')) {
            $data['image'] = ImageUploadHelper::store(
                $request->file('image'),
                'brands',
                $brand->image
            );
        }
        return $brand->update($data);
    }

    public function delete($id)
    {
        $brand = $this->model->findOrFail($id);
        if ($brand->image && Storage::disk('public')->exists($brand->image)) {
            Storage::disk('public')->delete($brand->image);
        }
        return $brand->delete();
    }
}
