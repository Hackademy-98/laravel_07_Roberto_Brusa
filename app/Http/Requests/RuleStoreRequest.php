<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleStoreRequest extends FormRequest
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
            'name' => 'required|min:2',
            'description' => 'required',
            'img' => 'image',

        ];
    }
    public function messages(){
        return[
            'name.required' => 'STRONZO',
            'name.min' => 'di piu',
            'description.required' => 'lele',
        ];
    }
}
