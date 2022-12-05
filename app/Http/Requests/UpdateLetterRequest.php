<?php

namespace App\Http\Requests;

use App\Enums\LetterType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateLetterRequest extends FormRequest
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
            'agenda_number' => __('model.letter.agenda_number'),
            'from' => __('model.letter.from'),
            'to' => __('model.letter.to'),
            'reference_number' => __('model.letter.reference_number'),
            'received_date' => __('model.letter.received_date'),
            'letter_date' => __('model.letter.letter_date'),
            'description' => __('model.letter.description'),
            'note' => __('model.letter.note'),
            'classification_code' => __('model.letter.classification_code'),
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
            'agenda_number' => ['required'],
            'from' => [Rule::requiredIf($this->type == LetterType::INCOMING->type())],
            'to' => [Rule::requiredIf($this->type == LetterType::OUTGOING->type())],
            'reference_number' => ['required', Rule::unique('letters', 'reference_number')->ignore($this->id)],
            'received_date' => [Rule::requiredIf($this->type == LetterType::INCOMING->type())],
            'letter_date' => ['required'],
            'description' => ['required'],
            'note' => ['nullable'],
            'classification_code' => ['required'],
        ];
    }
}
