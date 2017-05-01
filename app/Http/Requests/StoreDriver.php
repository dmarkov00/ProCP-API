<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreDriver extends FormRequest
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

    public function wantsJson()
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
                'phoneNbr' => 'required',
                'email' => 'required|email|unique:drivers,email'
            ];
        } elseif ($this->isMethod('put')) {
            // TODO: Research how to retrieve the current email of a the driver that is being updated

//            return [
//
//                'email' => [
//                    'required',
//                    'email',
////                    Rule::unique('drivers')->ignore($request->email, 'email')
//                ]
//            ];
                return [];

        }
    }

}
