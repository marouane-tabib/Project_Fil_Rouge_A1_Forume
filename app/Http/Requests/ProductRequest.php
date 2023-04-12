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
}
