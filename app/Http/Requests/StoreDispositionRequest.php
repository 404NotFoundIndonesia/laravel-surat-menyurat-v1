<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDispositionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    public function attributes(): array
    {
        return [
            'to' => __('model.disposition.to'),
            'content' => __('model.disposition.content'),
            'due_date' => __('model.disposition.due_date'),
            'letter_status' => __('model.disposition.status'),
            'note' => __('model.disposition.note'),
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'to' => ['required'],
            'content' => ['required'],
            'due_date' => ['required'],
            'letter_status' => ['required'],
            'note' => ['nullable'],
        ];
    }
}
