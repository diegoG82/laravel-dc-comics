<?php

// namespace App\Http\Requests;

// use Illuminate\Foundation\Http\FormRequest;

// class StoreComicRequest extends FormRequest
// {
//     /**
//      * Determine if the user is authorized to make this request.
//      *
//      * @return bool
//      */
//     public function authorize()
//     {
//         return true;
//     }

//     /**
//      * Get the validation rules that apply to the request.
//      *
//      * @return array<string, mixed>
//      */
//     public function rules()
//     {
//         return [

//             'title' => 'required|min:5|max:100',
//             'description' => 'required',
//             'thumb' => 'required',
//             'price' => 'required',
//             'type' => 'required',
//             'series' => 'required'
//         ];
//     }
// }





namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'nullable|string',
            'price' => 'required|numeric',
            'type' => 'required|in:Comic,Graphic Novel',
            'series' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.string' => 'Il titolo deve essere una stringa.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.string' => 'La descrizione deve essere una stringa.',
            'thumb.string' => 'La thumb deve essere una stringa.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.in' => 'Il tipo deve essere "Comic" o "Graphic Novel".',
            'series.required' => 'La serie è obbligatoria.',
            'series.string' => 'La serie deve essere una stringa.',
        ];
    }
}
