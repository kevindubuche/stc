<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nom_cours'=>'required',
            'duree_cours'=>'required','prix_cours'=>'required',
            'lieu_cours'=>'required','comm_cours'=>'required',
        ];
    }
}
