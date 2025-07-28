<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SizeRequest;
use App\Repositories\SizeRepository;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function __construct(
        protected SizeRepository $repository
    ) {}

    public function index(Request $request)
    {
        $data['title'] = 'Sizes';
        $data['formTitle'] = 'Sizes';
        $data['collections'] = $this->repository->getPaginateData($request);
        if ($request->has('id')) {
            $data['title'] = 'Edit Size';
            $data['formTitle'] = 'Edit Size';
            $data['size'] = $this->repository->show($request->id);
        }
        return view('admin.sizes.index', compact('data'));
    }

    public function store(SizeRequest $request)
    {
        try {
            $this->repository->store($request);
            return redirect()->route('admin.sizes.index')->with('success', 'Size created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create size: ' . $e->getMessage());
        }
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
