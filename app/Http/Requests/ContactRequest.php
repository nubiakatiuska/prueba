<?php

namespace App\Http\Requests;
use App\Rules\MayusculaRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nombre' => ['required', new MayusculaRule],
            'email' => 'required|email',
            'mensaje' => 'required|min:5|max:10',
        ];
    }
}
