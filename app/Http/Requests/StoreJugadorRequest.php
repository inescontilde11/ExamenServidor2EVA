<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJugadorRequest extends FormRequest
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
            "dni" => ["required", "unique:jugadores,dni"],
            "nombre" => ["required","min:5"],
            "email" => ["required", "email", "min:5", "unique:jugadores,email"],
            "nick" => ["required", "unique:jugadores,nick"],
            "password" => ["required", "min:4"]
        ];
    }
}
