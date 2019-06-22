<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLifterrorRequest extends FormRequest
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
          'date'      => 'required|date', 
          'address'   => 'required|max:100', 
          'front'     => 'required|max:20', 
          'typeLift'  => 'required|max:30',
          'typeError' => 'nullable|max:10',
          'condition' => 'required|max:40',                      
          'work'      => 'nullable|max:255',
          'notice'    => 'nullable|max:255',
          'human'     => 'required|max:50',
          'seizing'   => 'nullable|max:100|',
          'floor'     => 'nullable|max:10|between:1,40',
          
        ];
    }
}
