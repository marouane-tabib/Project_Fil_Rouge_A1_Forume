<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
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
              'name' => 'required|string|min:4|max:50|unique:colors|regex:/^[^\d]*$/',
            ];
          }
          case 'PUT' : {

          }
          case 'PATCH' : {
            return [
              'name' => 'required|string|min:4|max:50|unique:colors|regex:/^[^\d]*$/',
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
        'name.required' => 'Please enter a name for your color.',
        'name.string' => 'The name must be a string.',
        'name.min' => 'The name must be at least 4 characters long.',
        'name.max' => 'The name must not exceed 50 characters.',
        'name.unique' => 'The color name has already been taken.',
        'name.regex' => 'The :attribute field cannot contain numbers.'
      ];
    }
}
