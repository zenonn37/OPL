<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
            'home' => 'required|string',
            'away' => 'required|string',
            'game' => 'required|string',
            'favorite' => 'required|string',
            'spread' => 'required|string',
            'location' => 'required|string',
            'time' => 'required|string',

        ];
    }
}
