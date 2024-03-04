<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',
            'description.required' => 'La descrizione è obbligatoria.',
            'thumb.required' => 'Il campo thumb è obbligatorio.',
            'thumb.url' => 'Il thumb deve essere un URL valido.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'series.required' => 'La serie è obbligatoria.',
            'series.max' => 'La serie non può superare i 255 caratteri.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita deve essere una data valida.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.max' => 'Il tipo non può superare i 255 caratteri.',
            'artists.string' => 'Gli artisti devono essere una stringa.',
            'artists.nullable' => 'Il campo artisti può essere vuoto.',
            'writers.string' => 'Gli scrittori devono essere una stringa.',
            'writers.nullable' => 'Il campo scrittori può essere vuoto.',
        ];
    }

}
