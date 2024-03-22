<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComicUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd('ciao');
        return [
            'title' => [
                'required',
                'string',
                Rule::unique('comics', 'title')->ignore((int)($this->comic))
            ],
            'description' => 'required|string|max:1024',
            'thumb' => 'required',
            'price' => 'required|decimal:2',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required'
        ];
    }
}
