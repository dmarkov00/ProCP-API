<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDriver extends FormRequest
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
     * @return array
     */
    public function rules()
    {

        // TODO: Research how to retrieve the current email of a the driver that is being updated
//        return [
//
//            'email' => [
//                'email',
//                Rule::unique('drivers')->ignore($user->id)]
//        ];
        return [

            'email' => 'required|email|unique:drivers,email'
        ];
    }
}
