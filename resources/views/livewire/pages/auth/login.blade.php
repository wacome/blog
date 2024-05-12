<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <div class="backdrop-blur p-16 rounded-2xl shadow-2xl w-96 max-w-lg h-[512px]">
        <h2 class="text-3xl font-bold text-center mb-6">Login</h2>
        <form wire:submit="login">
            <!-- Session Status -->
            <div class="mb-4">
                <x-auth-session-status class="mb-4" :status="session('status')" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input wire:model="form.email" id="email" class="input-field mt-1 w-full rounded-lg border border-gray-300 p-3 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" type="email" name="email" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('form.email')" class="mt-2 text-red-600" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input wire:model="form.password" id="password" class="input-field mt-1 w-full rounded-lg border border-gray-300 p-3 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('form.password')" class="mt-2 text-red-600" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-6">
                <label for="remember" class="flex items-center">
                    <input wire:model.defer="form.remember" id="remember" type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-700">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Submit Button -->
            <div>
                <x-primary-button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline justify-center">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
