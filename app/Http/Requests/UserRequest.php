<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function __construct()
    {
        session()->flash('noDiseases', true);
    }
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
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'nid' => ['required', 'unique:users,nid', 'numeric'],
            'phone' => ['required', 'unique:users,phone', 'numeric'],
            'vaccine_id' => ['required'],
            'division' => ['required'],
            'district' => ['required'],
            'hospital_id' => ['required'],
            'date_of_birth' => ['required', 'before:2010-01-01'],
        ];
    }
}
