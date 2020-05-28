<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStoryStory extends FormRequest
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
            'user_id'=> 'required',
            'title'=> 'required|min:5|max:120',
            'categoria'=> 'required',
            'body'=> 'required|min:5',
            'status'=> 'required',
            'imagen'=> 'required',
        ];
    }
}
