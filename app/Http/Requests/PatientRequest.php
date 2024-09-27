<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'nom' => 'required',
            'prenom' => 'required',
            'postnom' => 'required',
            'profession' => 'required',
            'date_naissance' => 'required',
            'nationalite' => 'required',
            'etat_civil' => 'required',
            'age' => 'required',
            'sexe' => 'required',
            'num_partenaire' => 'required',

        ];
    }
}
