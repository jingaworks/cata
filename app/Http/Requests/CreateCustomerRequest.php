<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CuiNumber;
use App\Rules\PhoneNumber;

class CreateCustomerRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:150'],
            'cui' => ['required', 'digits_between:2,10', new CuiNumber],
            'phone' => ['required', new PhoneNumber],
            'region' => ['required', 'string', 'max:70'],
            'place' => ['required', 'string', 'max:70'],
            'address' => ['required', 'string', 'min:5', 'max:300'],
        ];
    }
}
