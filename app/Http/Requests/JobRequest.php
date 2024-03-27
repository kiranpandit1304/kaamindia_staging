<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'salary.is_disclosed' => 'required',
            'salary.salary_type' => 'required_if:salary.is_disclosed,required',
            'salary.salary.min' => 'required_if:salary.salary_type,required',
            'salary.negotiable' => 'required',
            'job_working_type' => 'required',
            'location.state' => 'required_if:job_working_type,full_Time,required',
            'location.city' => 'required_if:job_working_type,full_Time,required',
            'job_type' => 'required|array|min:1',
            'role' => 'required',
            'job_openings' => 'required',
            'incentive' => 'required',
            'min_qualification' => 'required',
            'gender' => 'required',
            'perks' => 'required|array|min:1',
            'skills' => 'required|array|min:1',
            'interview_type' => 'required',
            'experience.type' => 'required',
            'experience.experience.min' => 'required_if:experience.type,experience,required',
            'experience.experience.max' => 'required_if:experience.type,experience,required',
            'job_expiry' => 'required',
            'security.security_deposite' => 'required',
            'security.amount' => 'required_if:security.security_deposite,Yes,required',
        ];
    }
}
