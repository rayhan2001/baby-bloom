<div class="col-12">
    <x-form.input name="title" label="Title" placeholder="Enter color title" :required="true" :value="$data['color']->title ?? old('title')" />
</div>
<div class="col-12">
    <x-form.select name="status" label="Status" :options="['active' => 'Active', 'inactive' => 'Inactive']" placeholder="Select status" :required="true"
        :selected="$data['color']->status ?? old('status', $data['color']->status ?? '')" />
</div>
<div class="col-12">
    <x-form.button type="submit" class="btn-primary" label="{{ isset($data['color']) ? 'Update' : 'Create' }} Color" />
</div>
