<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'name'          => 'nullable|string|max:255',
            'description'   => 'nullable|string',
            'status_id'     => 'nullable|exists:task_statuses,id',
            'user_id'       => 'nullable|exists:users,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'      => 'El nombre de la tarea es obligatorio.',
            'name.string'        => 'El nombre debe ser una cadena de texto.',
            'name.max'           => 'El nombre no puede tener más de 255 caracteres.',
            'description.string' => 'La descripción debe ser una cadena de texto.',
            'status_id.exists'   => 'El estado de la tarea no es válido.',
            'user_id.exists'     => 'El usuario asignado no es válido.',
        ];
    }
}
