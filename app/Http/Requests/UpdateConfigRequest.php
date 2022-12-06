<?php

namespace App\Http\Requests;

use App\Enums\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateConfigRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return auth()->user()->role == Role::ADMIN->status();
    }

    public function attributes(): array
    {
        return [
            'default_password' => __('model.config.default_password'),
            'page_size' => __('model.config.page_size'),
            'app_name' => __('model.config.app_name'),
            'institution_name' => __('model.config.institution_name'),
            'institution_address' => __('model.config.institution_address'),
            'institution_phone' => __('model.config.institution_phone'),
            'institution_email' => __('model.config.institution_email'),
            'language' => __('model.config.language'),
            'pic' => __('model.config.pic'),
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
            'default_password' => ['required'],
            'page_size' => ['required'],
            'app_name' => ['required'],
            'institution_name' => ['required'],
            'institution_address' => ['required'],
            'institution_phone' => ['required'],
            'institution_email' => ['required'],
            'pic' => ['required'],
        ];
    }
}
