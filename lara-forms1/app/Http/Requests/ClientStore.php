<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStore extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'document_number' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date_birth' => 'required|date',
            'marital_status' => 'required|in:1,2,3',
            'sex' => 'required|in:m,M,f,F',
            'physical_desability' => 'max:255'
        ];
    }
}
