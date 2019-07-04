<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PickRequest extends FormRequest
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
            'losing1' => 'required|string',
            'losing2' => 'required|string',
            'losing3' => 'required|string',
            'losing4' => 'required|string',
            'losing5' => 'required|string',
            'losing6' => 'required|string',
            'losing7' => 'required|string',
            'losing8' => 'required|string',
            'losing9' => 'required|string',
            'losing10' => 'required|string',
            'losing11' => 'required|string',
            'losing12' => 'required|string',
            'losing13' => 'required|string',
            'losing14' => 'nullable',
            'losing15' => 'nullable',
            'losing16' => 'nullable',
            'favorite1' => 'required|string',
            'favorite2' => 'required|string',
            'favorite3' => 'required|string',
            'favorite4' => 'required|string',
            'favorite5' => 'required|string',
            'favorite6' => 'required|string',
            'favorite7' => 'required|string',
            'favorite8' => 'required|string',
            'favorite9' => 'required|string',
            'favorite10' => 'required|string',
            'favorite11' => 'required|string',
            'favorite12' => 'required|string',
            'favorite13' => 'required|string',
            'favorite14' => 'nullable',
            'favorite15' => 'nullable',
            'favorite16' => 'nullable',
            'league_id' => 'required'
        ];
    }
}
