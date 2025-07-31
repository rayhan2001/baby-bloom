<div class="col-12">
    <x-form.input name="name" label="Brand Name" placeholder="Enter brand name" :required="true"
        :value="$data['brand']->name ?? old('name')" />
</div>
<div class="col-12">
    <x-form.input name="description" label="Short Description" placeholder="Enter brand description"
        :value="$data['brand']->description ?? old('description')" />
</div>
<div class="col-12">
    <x-form.file-input name="image" label="Upload Image" :required="true" :value="$data['brand']->image ?? old('image')" />
</div>
<div class="col-12">
    <x-form.select name="status" label="Status" :options="['active' => 'Active', 'inactive' => 'Inactive']" placeholder="Select status" :required="true"
        :selected="$data['brand']->status ?? old('status', $data['brand']->status ?? '')" />
</div>
<div class="col-12">
    <x-form.button type="submit" class="btn-primary"
        label="{{ isset($data['brand']) ? 'Update' : 'Create' }} Brand" />
</div>
