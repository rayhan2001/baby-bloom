<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0|lt:price',
            'discount_type' => 'nullable|in:fixed,percent',
            'stock_status' => 'required|in:in_stock,out_of_stock',
            'categories' => 'required|array|min:1',
            'categories.*' => 'exists:categories,id',
            'brands' => 'nullable|array',
            'brands.*' => 'exists:brands,id',
            'colors' => 'nullable|array',
            'colors.*' => 'exists:colors,id',
            'sizes' => 'nullable|array',
            'sizes.*' => 'exists:sizes,id',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'details' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'is_featured' => 'nullable|boolean',
            'is_new' => 'nullable|boolean',
            'is_related' => 'nullable|boolean',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ];
    }

    /**
     * Get the custom messages for the validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'name.required' => 'The product name is required.',
            'name.string' => 'The product name must be a string.',
            'name.max' => 'The product name may not be greater than 255 characters.',

            'sku.required' => 'The SKU is required.',
            'sku.string' => 'The SKU must be a string.',
            'sku.max' => 'The SKU may not be greater than 255 characters.',

            'price.required' => 'The price is required.',
            'price.numeric' => 'The price must be a number.',
            'price.min' => 'The price must be at least 0.',

            'discount_price.numeric' => 'The discount price must be a number.',
            'discount_price.min' => 'The discount price must be at least 0.',
            'discount_price.lt' => 'The discount price must be less than the original price.',

            'discount_type.in' => 'The discount type must be either "fixed" or "percent".',

            'stock_status.required' => 'The stock status is required.',
            'stock_status.in' => 'The stock status must be either "in_stock" or "out_of_stock".',

            'categories.required' => 'At least one category must be selected.',
            'categories.array' => 'Categories must be an array.',
            'categories.*.exists' => 'One or more selected categories are invalid.',

            'brands.array' => 'Brands must be an array.',
            'brands.*.exists' => 'One or more selected brands are invalid.',

            'colors.array' => 'Colors must be an array.',
            'colors.*.exists' => 'One or more selected colors are invalid.',

            'sizes.array' => 'Sizes must be an array.',
            'sizes.*.exists' => 'One or more selected sizes are invalid.',

            'short_description.string' => 'Short description must be a string.',
            'description.string' => 'Description must be a string.',
            'details.string' => 'Details must be a string.',

            'status.required' => 'The product status is required.',
            'status.in' => 'The status must be either "active" or "inactive".',

            'is_featured.boolean' => 'Invalid value for "is featured".',
            'is_new.boolean' => 'Invalid value for "is new".',
            'is_related.boolean' => 'Invalid value for "is related".',

            'images.array' => 'Images must be an array.',
            'images.max' => 'You may not upload more than 5 images.',
            'images.*.image' => 'Each uploaded file must be an image.',
            'images.*.mimes' => 'Images must be in jpeg, png, jpg, or webp format.',
            'images.*.max' => 'Each image must not be larger than 2MB.',
        ];
    }
}
