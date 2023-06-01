<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'type' => 'required|in:Comic,Graphic Novel',
            'series' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.string' => 'Il titolo deve essere una stringa.',
            'title.max' => 'Il titolo non può superare :max caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.string' => 'La descrizione deve essere una stringa.',
            'thumb.string' => 'Il campo thumb deve essere una stringa.',
            'thumb.max' => 'Il campo thumb non può superare :max caratteri.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un valore numerico.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.in' => 'Il tipo deve essere "Comic" o "Graphic Novel".',
            'series.required' => 'La serie è obbligatoria.',
            'series.string' => 'La serie deve essere una stringa.',
            'series.max' => 'La serie non può superare :max caratteri.',
        ];
    }
}
