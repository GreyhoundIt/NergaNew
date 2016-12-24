<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TeamCreateRequest extends Request
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
            'p1_first_name' => 'required|alpha|min:1|max:255',
            'p1_last_name' => 'required|alpha|min:1|max:255',
            'p1_handicap' => 'required|numeric|between:0,28',

            'p2_first_name' => 'required|alpha|min:1|max:255',
            'p2_last_name' => 'required|alpha|min:1|max:255',
            'p2_handicap' => 'required|numeric|between:0,28',

            'p3_first_name' => 'required|alpha|min:1|max:255',
            'p3_last_name' => 'required|alpha|min:1|max:255',
            'p3_handicap' => 'required|numeric|between:0,28',

            'p4_first_name' => 'required|alpha|min:1|max:255',
            'p4_last_name' => 'required|alpha|min:1|max:255',
            'p4_handicap' => 'required|numeric|between:0,28',

            'p5_first_name' => 'alpha|min:1|max:255',
            'p5_last_name' => 'alpha|min:1|max:255',
            'p5_handicap' => 'numeric|between:0,28',

            'p6_first_name' => 'alpha|min:1|max:255',
            'p6_last_name' => 'alpha|min:1|max:255',
            'p6_handicap' => 'numeric|between:0,28',

            'p7_first_name' => 'alpha|min:1|max:255',
            'p7_last_name' => 'alpha|min:1|max:255',
            'p7_handicap' => 'numeric|between:0,28',

            'p8_first_name' => 'alpha|min:1|max:255',
            'p8_last_name' => 'alpha|min:1|max:255',
            'p8_handicap' => 'numeric|between:0,28',

            'g1_first_name' => 'alpha|min:1|max:255',
            'g1_last_name' => 'alpha|min:1|max:255',
            'g1_handicap' => 'numeric|between:0,28',

            'g2_first_name' => 'alpha|min:1|max:255',
            'g2_last_name' => 'alpha|min:1|max:255',
            'g2_handicap' => 'numeric|between:0,28',

        ];
    }
}
