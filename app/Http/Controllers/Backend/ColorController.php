<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorRequest;
use App\Repositories\ColorRepository;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function __construct(
        protected ColorRepository $repository
    ) {}

    public function index(Request $request)
    {
        $data['title'] = 'Colors';
        $data['formTitle'] = 'Colors';
        $data['collections'] = $this->repository->getPaginateData($request);
        if ($request->has('id')) {
            $data['title'] = 'Edit Color';
            $data['formTitle'] = 'Edit Color';
            $data['color'] = $this->repository->show($request->id);
        }
        return view('admin.colors.index', compact('data'));
    }

    public function store(ColorRequest $request)
    {
        try {
            $this->repository->store($request);
            return redirect()->route('admin.colors.index')->with('success', 'Color created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create color: ' . $e->getMessage());
        }
    }

    public function update(ColorRequest $request, $id)
    {
        try {
            $this->repository->update($id, $request);
            return redirect()->route('admin.colors.index')->with('success', 'Color updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update color: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->repository->delete($id);
            return redirect()->route('admin.colors.index')->with('success', 'Color deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete color: ' . $e->getMessage());
        }
    }
}
