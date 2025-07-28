<?php

namespace App\Repositories;

use App\Models\Color;
use Illuminate\Support\Str;

class ColorRepository
{
    public function __construct(
        protected Color $model
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
        $color = $this->model->findOrFail($id);

        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        return $color->update($data);
    }

    public function delete($id)
    {
        $color = $this->model->findOrFail($id);
        return $color->delete();
    }
}
