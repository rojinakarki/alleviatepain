<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'course_title' => ['required','string', 'max:255'],
            'course_description'=>['required', 'string'],
            'course_category'=>['required','in:education,exercise'],
            'course_type'=>['required','in:free,prime'],
            'course_cost'=>['required','string' ],
            'course_duration'=>['required', 'string'],
            'reps'=>['required', 'string'],
            'sets'=>['required', 'string'],
        ];
    }
}
