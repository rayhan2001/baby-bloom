<form class="d-flex mb-3" method="GET" action="{{ request()->url() }}">
    <input type="text" name="search" value="{{ request('search') }}" class="form-control me-2" placeholder="Search...">
    <select name="status" class="form-select me-2">
        <option value="">All Status</option>
        <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
    <button type="submit" class="btn btn-primary">Filter</button>
</form>
