<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dni' => 'required|string|max:20|unique:persona,dni',
            'nombre' => 'required|string|max:45',
            'apellido' => 'required|string|max:45',
            'correo' => 'required|email|max:255|unique:persona,correo',
            'telefono' => 'required|string|max:20',
            'password' => 'required|string|min:8'
        ];
    }
}
