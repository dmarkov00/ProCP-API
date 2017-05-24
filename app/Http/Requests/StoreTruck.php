<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTruck extends FormRequest
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
                'licensePlate' => 'required|unique:trucks',
                'payLoadCapacity' => 'required',
                'weight' => 'required',
                'height' => 'required',
                'width' => 'required',
                'length' => 'required',
            ];
        } elseif ($this->isMethod('put')) {
            return [
                'licensePlate' => [
                    'required',
                    Rule::unique('trucks')->ignore($this->truck->id)],
                    'payLoadCapacity' => 'required',
                    'weight' => 'required',
                    'height' => 'required',
                    'width' => 'required',
                    'length' => 'required',

            ];

        }
    }
}
