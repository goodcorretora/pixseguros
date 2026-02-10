<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone_celular' => ['nullable', 'regex:/^\(?\d{2}\)?\s?\d{4,5}\-?\d{4}$/'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)],
            'password' => $this->passwordRules(),
        ])->validate();

        // sanitize phone (store only digits)
        $phone = isset($input['phone_celular']) ? preg_replace('/\D+/', '', $input['phone_celular']) : null;


        return User::create([
            'name' => $input['name'],
            'phone_celular' => $phone,
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
