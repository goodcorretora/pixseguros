<?php

use App\Models\Term;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;


new #[Layout('layouts.auth', ['title' => 'Register'])] class extends Component
{
    public bool $terms = false;

    public string $name = '';
    public string $phone_celular = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    // Regras para validação Livewire
    protected array $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|lowercase|email|max:255|unique:users,email',
        'phone_celular' => 'required|string|max:20|unique:users,phone_celular',
        'password' => 'required|string|confirmed',
    ];

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone_celular' => ['required', 'string', 'max:20', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);
        
        Term::create([
            'user_id' => $user->id,
            'terms' => $this->terms,
        ]);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; 
?>

<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Mobile Phone Number -->
          <div class="col-span-6 sm:col-span-3 mt-4" x-data>
              <label for="phone_celular" class="block text-gray-700 text-sm font-bold mb-2">Celular</label>
              <input
                  wire:model="phone_celular"
                  id="phone_celular"
                  type="text"
                  required
                  name="phone_celular"
                  autocomplete="phone_celular"
                  x-mask="(99) 99999-9999"
                  x-mask:dynamic="(99) 9999-9999"
                  placeholder="Celular"
                  class="mt-1 focus:ring-primary-600 focus:border-primary-600 block w-full shadow-xs sm:text-base border-gray-300 rounded-md"
              >
              @error('phone_celular') <span>{{ $message }}</span> @enderror
          </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


         <!-- Terms of Service -->
         <div class="mt-4">
            <label for="terms" class="inline-flex items-center">
                <input id="terms" type="checkbox" class="rounded-sm border-gray-300 text-primary-600 shadow-xs focus:border-primary-300 focus:ring-3 focus:ring-primary-200 focus:ring-opacity-50" name="terms" required>
                <span class="ml-2 text-sm text-gray-600">
                    Eu aceito os
                    <a href="{{ ('termos-de-servicos') }}" class="underline items-center justify-center rounded-md border border-transparent bg-white text-sm font-medium text-primary-600 hover:bg-primary-50">Termos de Serviços</a> e <a href="{{ ('politica-de-privacidade') }}" class="underline items-center justify-center rounded-md border border-transparent bg-white text-sm font-medium text-primary-600 hover:bg-primary-50">Política de Privacidade</a>.
                </span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            <a class="underline text-base text-gray-600 hover:text-gray-900 rounded-md focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-primary-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Já está cadastrado?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
    </form>
</div>
