<?php

namespace App\Http\Requests\App\PostoTrabalho;

use Illuminate\Foundation\Http\FormRequest;

class PostoTrabalhoEditRequest extends FormRequest
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
