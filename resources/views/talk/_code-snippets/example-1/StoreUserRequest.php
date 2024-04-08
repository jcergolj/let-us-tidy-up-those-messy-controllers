<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'sometimes',
        ];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'email' => Str::of($this->email)->lower()->_toString(),
            'name' => Str::of($this->name)->ucwords()->_toString(),
        ]);
    }

    protected function passedValidation()
    {
        $this->mergeIfMissing(['role' => 'user']);
    }
}
