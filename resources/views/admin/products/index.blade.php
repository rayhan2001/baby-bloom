@extends('admin.layouts.app')
@section('title', @$data['title'])
@section('content')
    <main class="page-content">
        <div class="card">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="mb-0">{{ @$data['cardTitle'] }}</h6>
                <x-form.button-link href="{{ route('admin.products.create') }}" type="primary">
                    Add Product
                </x-form.button-link>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-12 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <x-form.filters />
                                <x-form.table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data['collections'] as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->title }}</td>
                                                <td>{{ $row->slug }}</td>
                                                <td><x-form.status :value="$row->status" :data="['active', 'inactive']" /></td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <a href="{{ route('admin.sizes.index', ['id' => $row->id]) }}"
                                                            class="text-warning">
                                                            <i class="bi bi-pencil-fill"></i>
                                                        </a>
                                                        <form method="POST"
                                                            action="{{ route('admin.sizes.destroy', $row->id) }}"
                                                            onsubmit="return confirm('Are you sure?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-link text-danger p-0 m-0" type="submit">
                                                                <i class="bi bi-trash-fill"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center text-muted">No categories found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </x-form.table>
                                <x-form.pagination>
                                    {{ $data['collections']->links() }}
                                </x-form.pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
