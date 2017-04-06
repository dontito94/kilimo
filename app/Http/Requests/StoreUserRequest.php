<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
           'first_name' => 'required|max:255',
            'surname' => 'required|max:255',
            'password' => 'required|min:6',
            'city' => 'required|max:255',
            'municipal' => 'required|max:255',
            'ward' => 'required|max:255',
            'street' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'birth_date' => 'required|max:255',
            
        ];
    }
}
