<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'imdbID' => 'required|unique:movies,imdbID',
            'title' => 'required',
            'year' => 'required',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'imdbID.required' => 'É obrigatório informar um imdbID.',
            'imdbID.unique' => 'imdbID já cadastrado.',
            'title.required' => 'É obrigatório informar um título.',
            'year.required' => 'É obrigatório informar um ano.',
            'type.required' => 'É obrigatório informar um tipo.'
        ];
    }
}
