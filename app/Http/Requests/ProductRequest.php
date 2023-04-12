<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
      switch ($this->method()){
          case 'POST' : {
            return [
              // Images types and size => Thumbnail images=>max:50KB|Product images=>max:500KB|Zoom or gallery images=>max:1MB
              'image' => 'required|image|between:10,200|mimes:jpeg,png,jpg',
              'title' => 'required|string|min:4|max:50',
              'price' => 'required|numeric|min:50',
              'quantity' => 'required|numeric|min:1',
              'sku' => 'required|numeric|min:1',
              'width' => 'required|numeric|min:0',
              'length_value' => 'required|numeric|min:0',
              'category_id' => 'required|numeric|exists:categories,id',
              'primary_color_id' => 'required|numeric|exists:colors,id',
              'secondary_color_id' => 'required|numeric|exists:colors,id',
              'home_style_id' => 'required|numeric|exists:home_styles,id',
              'description' => 'required|string|min:10|max:5000',
            ];
          }
          case 'PUT' : {

          }
          case 'PATCH' : {
            return [
              // Images types and size => Thumbnail images=>max:50KB|Product images=>max:500KB|Zoom or gallery images=>max:1MB
              'image' => 'nullable|image|between:10,200|mimes:jpeg,png,jpg',
              'title' => 'required|string|min:4|max:50',
              'price' => 'required|numeric|min:50',
              'quantity' => 'required|numeric|min:1',
              'sku' => 'required|numeric|min:1',
              'width' => 'required|numeric|min:0',
              'length_value' => 'required|numeric|min:0',
              'category_id' => 'required|numeric|exists:categories,id',
              'primary_color_id' => 'required|numeric|exists:colors,id',
              'secondary_color_id' => 'required|numeric|exists:colors,id',
              'home_style_id' => 'required|numeric|exists:home_styles,id',
              'description' => 'required|string|min:10|max:5000',
            ];
          }
          default: break;
      }
      return [
          //
      ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Please upload an image for your product.',
            'image.image' => 'The uploaded file must be an image.',
            'image.between' => 'The image size must be between 10 KB and 200 KB.',
            'image.mimes' => 'The image must be in JPEG, PNG, or JPG format.',
            'title.required' => 'Please enter a title for your product.',
            'title.string' => 'The title must be a string.',
            'title.min' => 'The title must be at least 4 characters long.',
            'title.max' => 'The title must not exceed 50 characters.',
            'price.required' => 'Please enter a price for your product.',
            'price.numeric' => 'The price must be a numeric value.',
            'price.min' => 'The price must be at least 50.',
            'quantity.required' => 'Please enter a quantity for your product.',
            'quantity.numeric' => 'The quantity must be a numeric value.',
            'quantity.min' => 'The quantity must be at least 1.',
            'sku.required' => 'Please enter a SKU for your product.',
            'sku.numeric' => 'The SKU must be a numeric value.',
            'sku.min' => 'The SKU must be at least 1.',
            'width.required' => 'Please enter a width for your product.',
            'width.numeric' => 'The width must be a numeric value.',
            'width.min' => 'The width must be at least 0.',
            'length_value.required' => 'Please enter a length value for your product.',
            'length_value.numeric' => 'The length value must be a numeric value.',
            'length_value.min' => 'The length value must be at least 0.',
            'category_id.required' => 'Please select a category for your product.',
            'category_id.numeric' => 'The category must be a numeric value.',
            'category_id.exists' => 'The selected category does not exist.',
            'primary_color_id.required' => 'Please select a primary color for your product.',
            'primary_color_id.numeric' => 'The primary color must be a numeric value.',
            'primary_color_id.exists' => 'The selected primary color does not exist.',
            'secondary_color_id.required' => 'Please select a secondary color for your product.',
            'secondary_color_id.numeric' => 'The secondary color must be a numeric value.',
            'secondary_color_id.exists' => 'The selected secondary color does not exist.',
            'home_style_id.required' => 'Please select a home style for your product.',
            'home_style_id.numeric' => 'The home style must be a numeric value.',
            'home_style_id.exists' => 'The selected home style does not exist.',
            'description.required' => 'Please enter a description for your product.',
            'description.string' => 'The description must be a string.',
            'description.min' => 'The description must be at least 10 characters long.',
            'description.max' => 'The description must not exceed 5000 characters.',
        ];
    }
}
