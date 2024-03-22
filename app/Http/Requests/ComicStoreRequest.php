<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicStoreRequest extends FormRequest
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
        return [
            'title' => 'required|unique:App\Models\Comic,title',
            'description' => 'required|string|max:1024',
            'thumb' => 'required',
            'price' => 'required|decimal:2',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required'
        ];
    }
}
