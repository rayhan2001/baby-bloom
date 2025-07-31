<div class="col-12">
    <x-form.input name="title" label="Title" placeholder="Enter size title" :required="true" :value="$data['size']->title ?? old('title')" />
</div>
<div class="col-12">
    <x-form.select name="status" label="Status" :options="['active' => 'Active', 'inactive' => 'Inactive']" placeholder="Select status" :required="true"
        :selected="$data['size']->status ?? old('status', $data['size']->status ?? '')" />
</div>
<div class="col-12">
    <x-form.button type="submit" class="btn-primary" label="{{ isset($data['size']) ? 'Update' : 'Create' }} Size" />
</div>
