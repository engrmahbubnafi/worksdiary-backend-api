<?php

namespace App\Http\Requests\Designation;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDesignationRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:75|unique:designations,name',
            'status' => 'required',
        ];
    }
}
