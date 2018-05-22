<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccueilFormRequest extends FormRequest
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
           /* 'accompagne' =>'required',*/
           /* 'immatricul' => 'required|min:10',
             'telephoneacom' => 'min:12|max:12',
            'telephonepere' => 'min:12|max:12',
            'telephonemere' => 'min:12|max:12',*/
        ];
    }
}
