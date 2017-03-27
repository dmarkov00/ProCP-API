<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoad extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'fName' => 'required',
                'lName' => 'required',
                'phone' => 'required',
                'email' => 'required|email|unique:clients',
            ];
        } elseif ($this->isMethod('put')) {
//            return [
//
//                'email' => [Rule::unique('clients')->ignore($this->email, 'email' )];
//            ];
//            return [
//
//                'email' => 'required|email|unique:drivers,email'
//            ];
        }
    }
}
