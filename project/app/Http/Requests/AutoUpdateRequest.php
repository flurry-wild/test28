<?php

namespace App\Http\Requests;

use App\Services\ListService;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AutoUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'model_id' => 'required|integer|exists:models,id',
            'issue' => 'required|integer|min:1970,max:' . date('Y'),
            'mileage' => 'required|integer',
            'color' => ['required', 'string', Rule::in(ListService::COLORS)]
        ];
    }
}
