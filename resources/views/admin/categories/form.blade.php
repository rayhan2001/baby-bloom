<div class="col-12">
    <x-form.input name="name" label="Category Name" placeholder="Enter category name" :required="true"
        :value="$data['category']->name ?? old('name')" />
</div>
<div class="col-12">
    <x-form.input name="description" label="Short Description" placeholder="Enter category description"
        :value="$data['category']->description ?? old('description')" />
</div>
<div class="col-12">
    <x-form.file-input name="icon" label="Upload Icon" :required="true" :value="$data['category']->icon ?? old('icon')" />
</div>
<div class="col-12">
    <x-form.select name="status" label="Status" :options="['active' => 'Active', 'inactive' => 'Inactive']" placeholder="Select status" :required="true"
        :selected="$data['category']->status ?? old('status', $data['category']->status ?? '')" />
</div>
<div class="col-12">
    <x-form.button type="submit" class="btn-primary"
        label="{{ isset($data['category']) ? 'Update' : 'Create' }} Category" />
</div>
