<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
            'team1' => 'required|string',
            'team2' => 'required|string',
            'team3' => 'required|string',
            'team4' => 'required|string',
            'team5' => 'required|string',
            'team6' => 'required|string',
            'team7' => 'required|string',
            'team8' => 'required|string',
            'team9' => 'required|string',
            'team10' => 'required|string',
            'team11' => 'required|string',
            'team12' => 'required|string',
            'team13' => 'required|string',
            'team14' => 'nullable',
            'team15' => 'nullable',
            'team16' => 'nullable',
            'spread1' => 'required|integer',
            'spread2' => 'required|integer',
            'spread3' => 'required|integer',
            'spread4' => 'required|integer',
            'spread5' => 'required|integer',
            'spread6' => 'required|integer',
            'spread7' => 'required|integer',
            'spread8' => 'required|integer',
            'spread9' => 'required|integer',
            'spread10' => 'required|integer',
            'spread11' => 'required|integer',
            'spread12' => 'required|integer',
            'spread13' => 'required|integer',
            'spread14' => 'nullable',
            'spread15' => 'nullable',
            'spread16' => 'nullable',
        ];
    }
}
