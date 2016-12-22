<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class FixtureUpdateRequest extends Request
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
            'start_sheet_skeleton' => 'file|mimes:pdf|max:1500000',
            'start_sheet_official' => 'file|mimes:pdf|max:1500000',
            'team_overall' => 'file|mimes:pdf|max:1500000',
            'person_overall' => 'file|mimes:pdf|max:1500000'
        ];
    }
}
