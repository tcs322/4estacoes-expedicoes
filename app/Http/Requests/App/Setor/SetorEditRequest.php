<?php

namespace App\Http\Requests\App\Setor;

use Illuminate\Foundation\Http\FormRequest;

class SetorEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
