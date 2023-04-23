<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShapeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
              'name' => 'required|string|min:4|max:50|unique:categories|regex:/^[^\d]*$/',
            ];
          }
          case 'PUT' : {

          }
          case 'PATCH' : {
            return [
              //
            ];
          }
          default: break;
      }
        return [
            //
        ];
    }
}
