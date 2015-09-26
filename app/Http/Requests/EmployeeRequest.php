<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmployeeRequest extends Request
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
            'emp_firstname' => 'required',
            'emp_middlename' => 'required',
            'emp_lastname' => 'required',
            'emp_gender' => 'required',
            'emp_email' => 'required|email'
        ];
    }
    
    
    public function messages() {
        return [
            'emp_firstname.required' => 'The First Name field is required.',
            'emp_middlename.required' => 'The Middle Name field is required.',
            'emp_lastname.required' => 'The Last Name field is required.',
            'emp_gender.required' => 'The Gender field is required.',
            'emp_email.required' => 'The Email Address field is required.',
            'emp_email.email' => 'The Email Address must be a valid email address.'
        ];
    }
}
