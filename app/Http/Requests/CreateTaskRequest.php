<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
          'address'   => 'required|max:100', 
          'front'     => 'required|max:20', 
          'typeLift'  => 'required|max:30',
          'task'      => 'required|max:191',
          'fotoTask'  => 'nullable|image',           
          'human'     => 'required|max:50',          
        ];
    }
}
