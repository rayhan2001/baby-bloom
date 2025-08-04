<div class="row">
    <div class="col-12 col-md-6">
        <x-form.input name="name" label="Name" placeholder="Enter product name" :required="true" :value="$data['product']->name ?? old('name')" />
    </div>

    <div class="col-12 col-md-6">
        <x-form.input name="sku" label="SKU" placeholder="Enter product SKU" :required="true" :value="$data['product']->sku ?? old('sku')" />
    </div>

    <div class="col-12 col-md-6">
        <x-form.input name="price" label="Price" placeholder="Enter product price" type="number" step="0.01"
            :required="true" :value="$data['product']->price ?? old('price')" />
    </div>

    <div class="col-12 col-md-6">
        <x-form.input name="discount_price" label="Discount Price" placeholder="Enter product discount price"
            type="number" step="0.01" :required="true" :value="$data['product']->discount_price ?? old('discount_price')" />
    </div>

    <div class="col-12 col-md-6">
        <x-form.select name="discount_type" label="Discount Type" :options="['percentage' => 'Percentage', 'fixed' => 'Fixed Amount']" placeholder="Select discount type"
            :required="true" :selected="$data['product']->discount_type ?? old('discount_type', $data['product']->discount_type ?? '')" />
    </div>

    <div class="col-12 col-md-6">
        <x-form.select name="stock_status" label="Stock Status" :options="['in_stock' => 'In Stock', 'out_of_stock' => 'Out of Stock']" placeholder="Select status"
            :required="true" :selected="$data['product']->stock_status ?? old('stock_status', $data['product']->stock_status ?? '')" />
    </div>

    <div class="col-12 col-md-6">
        <x-form.select name="category_id" label="Category" :options="$categories" placeholder="Select category"
            :required="true" :selected="$data['product']->category_id ?? old('category_id', $data['product']->category_id ?? '')" />
    </div>

    <div class="col-12 col-md-6">
        <x-form.select name="brand_id" label="Brand" :options="$brands" placeholder="Select brand" :required="true"
            :selected="$data['product']->brand_id ?? old('brand_id', $data['product']->brand_id ?? '')" />
    </div>

    <div class="col-12">
        <x-form.editor name="short_description" label="Short Description" :value="$product->short_description ?? ''" required />
    </div>

    <div class="col-12">
        <x-form.file-input name="images[]" label="Images" multiple :required="true" />
    </div>

    <div class="col-12">
        <x-form.editor name="description" label="Full Description" :value="$product->description ?? ''" />
    </div>

    <div class="col-12">
        <x-form.editor name="details" label="JSON Details (Specifications, Care Instructions)" :value="$product->details ?? ''" />
    </div>

    <div class="col-12">
        <x-form.select name="status" label="Status" :options="['active' => 'Active', 'inactive' => 'Inactive']" placeholder="Select status" :required="true"
            :selected="$data['size']->status ?? old('status', $data['size']->status ?? '')" />
    </div>
</div>

<div class="row">
    <label for="" class="col-12 form-label"><span class="text-italic">Product Flags</span></label>
    <div class="col-12 col-md-4">
        <x-form.checkbox name="is_featured" label="Featured" :checked="old('is_featured')" />
    </div>

    <div class="col-12 col-md-4">
        <x-form.checkbox name="is_new" label="New Arrival" :checked="old('is_new')" />
    </div>

    <div class="col-12 col-md-4">
        <x-form.checkbox name="is_related" label="Related Products" :checked="old('is_related')" />
    </div>
</div>

<div class="col-12 col-md-2 mt-3 offset-md-10">
    <x-form.button type="submit" class="btn-primary" label="Submit Product" />
</div>
