<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class TestValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }
    /**
 * Prepare the data for validation.
 */
protected function prepareForValidation(): void
{
    $this->merge([
        'address_slug' => Str::slug($this->address),
    ]);
}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'email' => 'email|required|max:255',
            'password' => 'required',
            'address'=>'required',
            'address2'=>'nullable',
            'city'=>'nullable',
            'zip'=>'required',
            'address_slug'=>'nullable'
        ];
    }
    /**
 * Handle a passed validation attempt.
 */
protected function passedValidation(): void
{
    $this->replace(['name' => 'abc@gmail.com']);
}
    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'email.required' => 'A title is required',
        'email.email' => 'A message is required',
    ];
}
}
