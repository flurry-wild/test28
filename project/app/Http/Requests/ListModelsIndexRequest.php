<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListModelsIndexRequest extends FormRequest
{
    /* Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        return [
            'mark_id' => 'required|integer|exists:marks,id',
        ];
    }
}
