<?php

namespace SundaySim\Http\Requests;

use SundaySim\Http\Requests\Request;

class StorePageRequest extends Request
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
            'title' => ['required'],
            'uri' => ['required', 'unique:pages'],
            'name' => ['unique:pages'],
            'content' => ['required']
        ];
    }
}
