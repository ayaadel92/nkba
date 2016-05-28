<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TransferFormRequest extends Request
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
        $rules = [
                     'name'                    => 'required',
                    'card_id'                  => 'required',
                    'mem_number'        =>' required',
        ];
         return $rules;
    }

    public function messages()
{
    return [
        'name.required' => 'ادخل اسم المريض',
        'card_id.required'  => 'ادخل رقم  البطاقة الصحية',
    ];
}


}


