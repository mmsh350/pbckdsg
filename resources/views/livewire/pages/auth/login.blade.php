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

        $this->redirectIntended(default: route('admin.dashboard', absolute: false), navigate: false);
    }
}; ?>

<div class="min-h-screen flex w-full">

    <!-- Left Side: Branding / Welcome -->
    <div class="hidden lg:flex lg:w-1/2 bg-slate-900 relative overflow-hidden flex-col justify-between p-12">
        <!-- Abstract Background Elements -->
        <div class="absolute inset-0 z-0 opacity-20">
            <svg class="absolute left-0 top-0 h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon fill="currentColor" class="text-blue-600" points="0,100 100,0 100,100"></polygon>
            </svg>
        </div>

        <div class="relative z-10">
            <a href="/" class="flex items-center gap-3" wire:navigate>
                <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="PBC Admin" class="h-16 w-auto">
            </a>
        </div>

        <div class="relative z-10 mb-12">
            <h1 class="text-4xl font-bold text-white mb-6">Welcome Back</h1>
            <p class="text-lg text-slate-300 max-w-md">Access your dashboard to manage news, documents, departments, and system settings across the platform.</p>
        </div>
    </div>

    <!-- Right Side: Login Form -->
    <div class="flex-1 flex flex-col justify-center px-4 sm:px-6 lg:px-20 xl:px-24 bg-slate-50 relative z-10">
        <div class="mx-auto w-full max-w-sm lg:max-w-md">

            <!-- Mobile Header -->
            <div class="lg:hidden text-center mb-10">
                <a href="/" class="inline-flex items-center justify-center mb-4">
                    <img src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="PBC Admin" class="h-16 w-auto">
                </a>
            </div>

            <div class="bg-white px-8 py-10 shadow-xl shadow-slate-200/50 rounded-2xl border border-slate-100">
                <h2 class="text-2xl font-bold text-slate-900 mb-2">Sign in to portal</h2>
                <p class="text-sm text-slate-500 mb-8">Enter your details to access your account.</p>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form wire:submit="login" class="space-y-6">
                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700">Email Address</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" /></svg>
                            </div>
                            <input wire:model="form.email" id="email" type="email" name="email" required autofocus autocomplete="username" class="!pl-10 block w-full rounded-xl border-slate-200 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-20 py-3 text-slate-900 transition-colors" placeholder="admin@example.com" />
                        </div>
                        <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" wire:navigate class="text-sm font-medium text-blue-600 hover:text-blue-500">
                                    Forgot password?
                                </a>
                            @endif
                        </div>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" /></svg>
                            </div>
                            <input wire:model="form.password" id="password" type="password" name="password" required autocomplete="current-password" class="!pl-10 block w-full rounded-xl border-slate-200 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-20 py-3 text-slate-900 transition-colors" placeholder="••••••••" />
                        </div>
                        <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input wire:model="form.remember" id="remember" type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                        <label for="remember" class="ml-2 block text-sm text-slate-600">Remember me for 30 days</label>
                    </div>

                    <!-- Submit -->
                    <div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all active:scale-[0.98]">
                            Sign In
                        </button>
                    </div>
                </form>
            </div>

            <p class="mt-8 text-center text-sm text-slate-500">
                &copy; {{ date('Y') }} PBC. All rights reserved.
            </p>
        </div>
    </div>
</div>
