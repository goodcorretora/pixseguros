<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
            Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone_celular' => ['nullable', 'regex:/^\(?\d{2}\)?\s?\d{4,5}\-?\d{4}$/'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        ])->validateWithBag('updateProfileInformation');

        // sanitize phone
        $phone = isset($input['phone_celular']) ? preg_replace('/\D+/', '', $input['phone_celular']) : null;
        $user->phone_celular = $phone;

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'phone_celular' => $phone,
                'email' => $input['email'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $phone = isset($input['phone']) ? preg_replace('/\D+/', '', $input['phone']) : null;
        
        $user->forceFill([
            'name' => $input['name'],
            'phone_celular' => $phone,
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}