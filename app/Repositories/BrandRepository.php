<?php

namespace App\Repositories;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandRepository
{
    public function __construct(
        protected Brand $model
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
